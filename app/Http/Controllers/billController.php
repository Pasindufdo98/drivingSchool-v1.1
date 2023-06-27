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
use Intervention\Image\ImageManagerStatic as Image;

class billController extends Controller
{
    public function showBill()
    {
        $bill=Payment::where('user_id','=',Auth::id())->get();
       // dd($bill);

                

        return view('Student.bill',compact('bill'));
    }


   
        

    public function billStore(Request $request)
    {
        // dd($request);
        $user_id = Auth::id();
        $bill = Payment::where('user_id', $user_id)->first();
        
        if (!$bill) {
            $bill = new Payment();
            $bill->user_id = $user_id;
        }
        
        if ($request->hasFile('file1')) {
            $imageName = "1".'.'.$request->file('file1')->extension();
            $request->file('file1')->move(public_path('img'), $imageName);
            $bill->slip1_photo = $imageName;
        }
        
        if ($request->hasFile('file2')) {
            $imageName = "2".'.'.$request->file('file2')->extension();
            $request->file('file2')->move(public_path('img'), $imageName);
            $bill->installment2_photo = $imageName;
        }
        
        $bill->save();
    }
    

         

         

                 

        }
        
    


