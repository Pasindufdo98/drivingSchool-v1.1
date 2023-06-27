<?php

namespace App\Http\Controllers;


use App\Models\Contact;
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

class ContactController extends Controller
{
    public function storeContact(Request $request){
        //dd($request->all());

        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;

        $contact->save();

        $ConData=Contact::all();
        return redirect()->back();

        // return view('Admin.viewContact')->with('contacts,$ConData');
    }

    

}