<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use App\Models\Price;
use App\Models\Payment;
use App\Models\Student;
use App\Models\StdSession;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class ExamController extends Controller

{
    public function create(){
        
        
        return view('Admin.scheduleExam.fixexam');
        
       }

    public function index(){
        
        $data=Exam::all();
        return view('student.examDate.viewexamdate')->with('exams',$data);
        
       }

    public function store(Request $request){

    
        //dd($request->all());
        $exam=new Exam;
    
        $exam->date=$request->date;
        $exam->time=$request->time;
    
        $exam->save();
    
        $data=Exam::all();
        return redirect()->back();
    
        return view('viewexamdate')->with('exams,$data');
    }

    public function adminExamIndex(){
        
        $data=Exam::all();
        return view('Admin.scheduleExam.viewExam')->with('exams',$data);
        
       }
}
