<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Notice;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class noticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = DB::table('notices')->orderby('created_at','desc')->get();

                // dd($notices);
                
                return view('admin.notices.index',compact('notices'))->with('i',(request()->input('page',1) - 1) * 5);
                    

                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notices = Notice::get();
        //dd($notices);
       
        return view('Admin.notices.create',compact('notices'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notice = new Notice;
        

        $notice->notice = $request->notice;
        $notice->toUsers = $request->toUsers;



        $notice->save();

        return redirect()->route('notices.create')
                        ->with('success','Notice created successfully.');
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
        $notice=Notice::find($id);
        // dd($notice);
       $notices=$notice->notice;
       
        
        return view('Admin.notices.edit',compact('notice'));
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
    
        
        $input = $request->all();
        
        $notice = Notice::find($id);
        $notice->update($input);
        
        return redirect()->route('notices.index')
                        ->with('success','Notice updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notice::find($id)->delete();
        
        return redirect()->route('notices.index')
                        ->with('success','Notice deleted successfully');
    }
}
