<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Methodpay;
use Stripe\PaymentIntent;
use Srmklive\PayPal\Services\ExpressCheckout;
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
        $payment->user_id = Auth()->user()->id;
        $payment->course_id = Course::first()->id;
        $payment->methodpay_id = $method;

        $payment->payment_intent = $request->paymentIntent['id'];
        $payment->client_secret = $request->paymentIntent['client_secret'];
        $payment->save();

        return response()->json([
            'redirect' => '/videos',
        ]);
    }
    
    public function paypalhandle()
    {
        
        /*$method = Methodpay::where('name', 'Paypal')->first()->id;
        $payment = new Payment;
        $payment->user_id = Auth()->user()->id;
        $payment->course_id = Course::first()->id;
        $payment->methodpay_id = $method;
        $payment->save();*/


        $product = [];
        $product['items'] = [
            [
                'name' => 'The MW Academy',
                'price' => 112,
                'desc'  => 'test purposes',
                'qty' => 2
            ]
        ];
  
        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 224;
  
        $paypalModule = new ExpressCheckout;
  
        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);


        /*return response()->json([
            'redirect' => '/videos',
        ])*/

        return redirect($res['paypal_link']);
    }

    public function paypalcancel()
    {
        dd('broke ass bitch');
    }

    public function paypalsuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return redirect($response['paypal_link'])->with('Payment was successfull. The payment success page goes here!');
        }
  
        dd('Error occured!');
    }
}
