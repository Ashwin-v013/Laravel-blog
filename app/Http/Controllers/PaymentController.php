<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Models\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Str;



class PaymentController extends Controller
{
    private $razorpayId ='rzp_test_mt9JrtbbGWMDvl';
    private $razorpayKey='PWAUiy44tW7Nf6P5dq1fyGwm';

    public function initiate(Request $request)
    { 
        //Random receiptId
        $receiptId = Str::random(20);

        $api = new Api($this->razorpayId, $this->razorpayKey);
       //In razorpay have to convert rupees into paise multiply by 100
       //currenct wil be INR
        //Creating Order
        $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $request->all()['amount']*100,
            'currency' => 'INR'
            )
          );

        //   print_r($order);
        //   $payment =  Payments::create([
        //     'payment_id' => $request->$order['id'],
        //      'amount'=> $request->amount,
        //      'user_id'=> $request->user_id
        // ]);

        // dd($payment);
         

          //return response

          $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->all()['amount']*100,
            'name' => $request->all()['name'],
            'currency' => 'INR',
            'email' => $request->all()['email'],
            'contactNumber' => $request->all()['contactNumber'],
            'address' => $request->all()['address'],
            'description' => 'Testing description',

          ];
         
        //   $paymentID = $api->payment->fetch($request->razorpay_payment_id);
        // $amount->capture(array('amount'=>$response['amount']));

          return view('payment-page', compact('response'));
    }
   

    // public function store(Request $request)
    // {
    //  $input = $request->all;  
    //  $api = new Api($this->razorpayId, $this->razorpayKey);
    //  $payment = $api->payment->fetch($request->razorpay_payment_id);

    // }

    public function Complete(Request $request)
    {
        // print_r($request->all());
        // Now verify the signature is correct . We create the private function for verify the signature
        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid'],
            $request->all()['rzp_amount'],

        );

        $payment =  Payments::create([
            'payment_id' => $request->all()['rzp_paymentid'],
             'amount'=> $request->all()['rzp_amount'],
             'user_id'=> $request->user()->id
        ]);
        
        if($payment->amount != null)
        {
            $payment->is_subscribed = 1; 
            $payment->save();
        
        }
     
    
        // If Signature status is true We will save the payment response in our database
        // In this tutorial we send the response to Success page if payment successfully made
        if($signatureStatus == true) 
        {

            // You can create this page
          
            return view('payment-success-page');
        }
        else{
            // You can create this page
            return view('payment-failed-page');
        }

        return redirect('/blogs')->with('payment' , $payment);
    }
    
    // In this function we return boolean if signature is correct
    private function SignatureVerify($_signature,$_paymentId,$_orderId,$_amount)
    {
        try
        {
            // Create an object of razorpay class
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId , 'razorpay_amount' => $_amount);
            $order  = $api->utility->verifyPaymentSignature($attributes);
            return true;
        }
        catch(\Exception $e)
        {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }
}