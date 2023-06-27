<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Price;
use App\Models\Payment;
use App\Models\Student;
use App\Models\examResult;
use App\Models\StdSession;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class sessionController extends Controller


{
    public function index()
    {
        $session=StdSession::where('user_id','=',Auth::id())->get();
        //dd($session);


        return view('Student.session.index',compact('session'));
    }

    public function create()
    {
       
        return view('student.session.create');
    }

    public function store(Request $request)
    {
        // dd($request);
       
        
        //  request()->validate([
        //      'time'=> 'required',
        // //     'email'=> 'required',
        // //     'phone'=> 'required',
        // //     'password' => 'required|min:8|confirmed',
        // //     'file' => 'required',
        // ]);

        $validatedData = $request->validate([
            'date' => 'required',
            
        ]);

        // dd($request);
        $user = Auth::id();
        // dd($user);
        $session = new StdSession;
        
        $session->user_id = $user; 
        $session->date = $request->date;
        $session->time = $request->time;
        
        

        $session->save();

        return redirect()->route('createSession')
                        ->with('success','Session created successfully.');
        
    }

    public function destroy($id)
    {
        StdSession::find($id)->delete();
        
        return redirect()->route('viewSession')
                        ->with('success','session deleted successfully');
    }

    public function selectDate()
    {
        return view('Admin.session.view');
    }

    public function adminindex(Request $request)
    {
        $data = $request->date;
           // dd($data);
        $session = DB::table('std_sessions')
            ->select('*')
            ->where('date', '=', $data)
                ->get();
            //dd($session);
        return view('Admin.session.index',compact('session'));
        // return view('admin.notices.index',compact('notices'))
    }

   
}

