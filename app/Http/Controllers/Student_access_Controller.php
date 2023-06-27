<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class Student_access_Controller extends Controller
{
    public function showDash()
    {
        return view('Student.home');
    }

    public function showQuiz()
    {
        return view('Student.quiz');
    }

    public function showPP()
    {
        return view('Student.pastpapers');
    }

    public function showNotice()
    {
        $notices = DB::table('notices')
                ->select('notice','created_at')->where('toUsers','Students')
                
                ->paginate(3);

                return view('Student.notices',compact('notices'))
                    ->with('i',(request()->input('page',1) - 1) * 3);

                    
    }

    

}

