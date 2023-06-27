<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\examResult;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class Tutor_access_Controller extends Controller
{
    public function showDashTutor()
    {
        return view('Tutor.home');
    }

    public function showNotice()
    {
        $notices = DB::table('notices')
                ->select('notice','created_at')->where('toUsers','Tutors')
                
                ->paginate(3);

                return view('Tutor.notices',compact('notices'))
                    ->with('i',(request()->input('page',1) - 1) * 3);

                    
    }

    // public function showQuiz()
    // {
    //     return view('Tutor.quiz');
    // }

    // public function showPP()
    // {
    //     return view('Student.pastpapers');
    // }
}
