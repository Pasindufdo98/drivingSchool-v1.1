<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;
use App\Models\Student;
use App\Models\examResult;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class checkPayment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_results = DB::table('payments')
                ->join('students','students.user_id','=','payments.user_id')
                ->join('users','users.id','=','students.user_id')
                ->select('payments.*','users.name','students.user_id')
            
                ->paginate(50);

                
                return view('admin.checkpayment.index',compact('user_results'))->with('i',(request()->input('page',1) - 1) * 50);
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
        $user = Payment::find($id);
        //dd($results);
       
        return view('admin.checkPayment.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        request()->validate([
                'paid_unpaid1'=> 'required',
                'paid_unpaid1'=> 'required',
            //     'email'=> 'required',
            //     'phone'=> 'required',
            //     'password' => 'required|min:8|confirmed',
            //     'file' => 'required',
             ]);
           
           
            
            
            $Payment = Payment::find($request->id);
            $Payment->paid_unpaid1 =$request->paid_unpaid1;
            $Payment->paid_unpaid2 =$request->paid_unpaid2;
            $Payment->save();

            // $payment->update();


            
     
        
            return redirect()->route('checkPay.index')
                            ->with('success','Results created successfully.');
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
