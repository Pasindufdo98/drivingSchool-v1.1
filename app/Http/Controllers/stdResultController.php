<?php

namespace App\Http\Controllers;

use App\Models\User;
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



class stdResultController extends Controller
{
    public function showResult()
    {

        $result=examResult::where('user_id','=',Auth::id())->get();
        //dd($result);

                //  $result->Tresults=$exam->Tresults;
                // $result->Presults=$exam->Presults;

        return view('Student.result',compact('result'));
    }

}