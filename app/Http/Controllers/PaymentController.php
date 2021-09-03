<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Payment;
use App\Models\Methodpay;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $source = null;
        if($request->source == 'purchase')
        {
            $source = 'purchase';
        }
        if(Auth::user())
        {
            $stripeKey = Stripe::setApiKey('sk_test_51Gq7OjI8y7N0oWUMIIsIelTENjUsc3aVgNaRDvIVsduRfFAwQP9IW2dZ6HnSvr7ewnNmtF6GgZ2GbVQPdK09fx8J00tKqBQ6Ss');
            
            $stripeIntent = PaymentIntent::create([
                'amount' => 7099,
                'currency' => 'usd',
                'metadata' => ['integration_check' => 'accept_a_payment'],
            ]);
            $stripeClientSecret = Arr::get($stripeIntent, 'client_secret');
            
        } else {
            $stripeClientSecret = "";
        }

        return view('purchase.purchase', [
            'stripeClient' => $stripeClientSecret,
            'source' => $source,
        ]);
    }

    public function stripe(Request $request)
    {
        $method = Methodpay::where('name', 'Stripe')->first()->id;
        $payment = new Payment;
        $payment->user_id = 1;
        $payment->video_id = 1;
        $payment->methodpay_id = $method;

        $payment->payment_id = $request->paymentIntent['id'];
        $payment->client_secret = $request->paymentIntent['client_secret'];
        $payment->status = $request->paymentIntent['status'];
        $payment->save();

        dd($payment);
    }
    
}
