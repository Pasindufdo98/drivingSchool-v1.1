<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Price;
use App\Models\Payment;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nic' => ['required', 'string', 'max:100'],
            'contact' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
      // dd($data);
        // Create the user instance
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    
        // Create the student instance
        $student = new Student;
        $student->contact = $data->contact;
        $student->address = $data->address;
        $student->classA = $data->classA;
        $student->classA_transmission = $data->classA_transmission;
        $student->classB = $data->classB;
        $student->classB_transmission = $data->classB_transmission;
        $student->classB1 = $data->classB1;
        $student->classCE = $data->classCE;
        $student->nic = $data->nic;
        $student->bloodGroup = $data->bloodGroup;

        $tot = new Payment;

            
        $price = Price::find(1);
        $tA= $price->cost;

        $price = Price::find(2);
        $tB= $price->cost;

        $price = Price::find(3);
        $tB1= $price->cost;

        $price = Price::find(4);
        $tCE= $price->cost;
                    
    

        // $tA=8000;
        // $tB=20000;
        //$tB1=9000;
       // $tCE=21000;

    
    if($data->classA == "Selected"){
        $tot->total=$tA;
    }

    if($data->classB == "Selected"){
        $tot->total+=$tB;
    }

    if($data->classB1 == "Selected"){
        $tot->total+=$tB1;
    }

    if($data->classCE == "Selected"){
        $tot->total+=$tCE;
    }

    $tot->installment1=$tot->total/2;
    $tot->installment2=$tot->total/2;
       
    $user->student()->save($student);

    $user->assignRole('student');
    $user->payment()->save($tot);
        return $user;
    }
    
}
