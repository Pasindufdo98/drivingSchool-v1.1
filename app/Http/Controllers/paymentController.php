<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Price;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class paymentController extends Controller
{
    public function index()
    {
        $costs = DB::table('prices')->get();
        //->select('payments.*','users.name','students.user_id');

        return view('admin.payments.index',compact('costs'));
    }


    public function edit($id)
    {
        $cost = Price::find($id);

        return view('admin.payments.edit', ['cost' => $cost]);
    }

   
    public function update(Request $request, $id)
    {
        $cost = Price::find($id);
    
        $validatedData = $request->validate([
            'cost' => 'required|min:3|max:5',
            
        ]);
    
        $cost->cost = $validatedData['cost'];
        
    
      
        $cost->update();

        return redirect()->route('costs.index');


    }


    
    
}
