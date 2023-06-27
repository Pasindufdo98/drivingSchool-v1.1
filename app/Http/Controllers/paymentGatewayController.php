<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
Use Auth;

class paymentGatewayController extends Controller
{
    public function index(){
        
        $user = auth()->user();

        $bill=Payment::where('user_id','=',Auth::id())->get();
        
        return view('Student.pay-form',[
            'intent' => $user->createSetupIntent(), 'bill' => $bill,
        ]);
    }

    public function payDone(Request $request){
        // dd($request);
        $amount = $request->amount;
        $amount = $amount * 100;
        $paymentMethod = $request->payment_method;
        
        $user = auth()->user();
        $user->createOrGetStripeCustomer();
        
        $paymentMethod = $user->addPaymentMethod($paymentMethod);
        $user->charge($amount, $paymentMethod->id);
        
        // Update the payment status in the database
        $payment = Payment::where('user_id', $user->id)->first();
        if ($payment) {
            $payment->paid_unpaid1 = '1';
            $payment->save();
        }
        
        return redirect()->route('bill')->with('success', 'Payment Successful! Thank you.');


    }
}
