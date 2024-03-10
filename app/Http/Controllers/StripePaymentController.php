<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\Http\RedirectResponse;



class StripePaymentController extends Controller
{
    public function stripe(): View
    {
        return view('stripe');
    }
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => 500 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
                
        return back()
                ->with('success', 'Payment successful!');
    }
}
