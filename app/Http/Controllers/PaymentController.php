<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class PaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 150 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Eloge Leadership" 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}
