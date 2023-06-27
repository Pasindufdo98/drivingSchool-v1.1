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

class deleteSession extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        $session=StdSession::find($id);
       //dd($session);
        //$suser=$student->user;
        $attendance = $session->attendance;
         
         return view('Admin.session.attenEdit',compact('session','attendance'));
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
        //dd($id);
        $atten = StdSession::find($id);
        
        $atten->attendance=$request->attendance;
        $atten->update();
       
        
        
        return redirect()->route('selectDate')
                        ->with('success','Attendance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
        public function destroy($id)
        {
            StdSession::find($id)->delete();
            
            return redirect()->route('viewSession')
                            ->with('success','session deleted successfully');
        }
    

        
}
