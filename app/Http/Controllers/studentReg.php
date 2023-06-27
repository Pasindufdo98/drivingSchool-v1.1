<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Price;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class studentReg extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        // request()->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //     'password' => 'required|min:8|confirmed',
        //     'file' => 'required',
        // ]);
        // dd($request);
        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $student = new Student;
        $student->contact = $request->contact;
        $student->address = $request->address;
        $student->classA = $request->classA;
        $student->classA_transmission = $request->classA_transmission;
        $student->classB = $request->classB;
        $student->classB_transmission = $request->classB_transmission;
        $student->classB1 = $request->classB1;
        $student->classCE = $request->classCE;
        $student->nic = $request->nic;
        $student->bloodGroup = $request->bloodGroup;

        
        

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

        
        if($request->classA == "Selected"){
            $tot->total=$tA;
        }

        if($request->classB == "Selected"){
            $tot->total+=$tB;
        }

        if($request->classB1 == "Selected"){
            $tot->total+=$tB1;
        }

        if($request->classCE == "Selected"){
            $tot->total+=$tCE;
        }

        $tot->installment1=$tot->total/2;
        $tot->installment2=$tot->total/2;
           
        $user->student()->save($student);

        $user->assignRole('student');
        $user->payment()->save($tot);

        // if($request->hasFile('file')) {
        // $imageName = time().'.'.$request->file->extension();  
       
        // $request->file->move(public_path('images'), $imageName);

        // $student->photo_path = $imageName;
            
        // }  
        
        
    
        return redirect()->route('login')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
