<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Razorpay\Api\Api;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function index()
    {

        if(Auth::user()->role == 'Admin')
        {

            $customer = Customer::findOrFail(Auth::user()->customer_id);
            if($customer->plan == 'prosper'){
                $planamount = 1000;
            }else if($customer->plan == 'jackpot'){
                $planamount = 1500;
            }
            $plan = $customer->plan;
            $total_month = $customer->pending_month;
            $phoneno = $customer->phone_number;
            $status = 'OPEN';

            $today = Carbon::now()->format('Y-m-d');
            $year = date("Y",strtotime($today));
            $month = date("m",strtotime($today));

            $fifteenthday = date($year-$month-15);
            $lastday = date('t',strtotime($today));

            $monthinwords = date("M",strtotime($today));

            if (($today >= $fifteenthday) && ($today <= $lastday)){

                $Latest_order = Order::where('customer_id', '=', Auth::user()->customer_id)->where('status', '=', 'Paid')->where('month', '=', $monthinwords)->latest('id')->first();
                if($Latest_order != ''){
                    $pay_button_status = 'closed';
                }else {
                    $pay_button_status = 'open';
                }
                
            }else{
                $pay_button_status = 'closed';
            }


            $Orderdata = Order::where('customer_id', '=', Auth::user()->customer_id)->orderBy('id', 'DESC')->get();
            
            return view('pages.backend.customer.index', compact('customer', 'today', 'planamount', 'plan', 'total_month', 'status', 'phoneno', 'Orderdata', 'pay_button_status'));

        }else if(Auth::user()->role == 'Super-Admin'){

            $today = Carbon::now()->format('Y-m-d');

            return view('pages.backend.customer.index', compact('today'));

        }else {


            $data = Customer::where('soft_delete', '!=', 1)->orderBy('id', 'DESC')->get();


            $Customer_data = [];
            $families = [];
            foreach ($data as $key => $datas) {

                $Customer_data[] = array(
                    'name' => $datas->name,
                    'email' => $datas->email,
                    'phone_number' => $datas->phone_number,
                    'address' => $datas->address,
                    'plan' => $datas->plan,
                    'alternate_mobileno' => $datas->alternate_mobileno,
                    'status' => $datas->status,
                    'unique_key' => $datas->unique_key,
                    'id' => $datas->id,
                );

            }
            $today = Carbon::now()->format('Y-m-d');
            $customer = '';
            $planamount = '';
            $plan = '';
            $total_month = '';
            $status = '';
            $phoneno = '';
            $Orderdata = Order::orderBy('id', 'DESC')->get();

            $fifteenthday = date($year-$month-15);
            $lastday = date('t',strtotime($today));

            if (($today >= $fifteenthday) && ($today <= $lastday)){
                $pay_button_status = 'open';
            }else{
                $pay_button_status = 'closed';
            }
            return view('pages.backend.customer.index', compact('Customer_data', 'today', 'plan', 'planamount', 'total_month', 'status', 'phoneno', 'Orderdata', 'pay_button_status'));
        }
    }

   

   // private $razorpayId = "rzp_test_Pkkbzx5Jv2PbXn";
   // private $razorpaykey = "hXmr6R0g461B3qMnn37kyDg7";


    public function payment_request(Request $request)
    {
        if(Auth::user()->role == '')
        {
            $randomkey = Str::random(5);

            $data = new Customer();
    
            $data->unique_key = $randomkey;
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->phone_number = $request->get('phone_number');
            $data->address = $request->get('address');
            $data->plan = $request->get('plan');
            $data->alternate_mobileno = $request->get('alternate_mobileno');
            $data->userid = $request->get('userid');
            $data->status = 1;
            $data->total_month = 12;
            $data->pending_month = 12;
            $data->save();
    
    
            if($data->plan == 'prosper'){
                $planamount = 1000;
            }else if($data->plan == 'jackpot'){
                $planamount = 1500;
            }
    
            $user = User::findOrFail($request->get('userid'));
            $user->customer_id = $data->id;
            $user->role = 'Admin';
            $user->update();

        

           // Generate Random Receipt ID
           $receipt_id = Str::random(20);

           $razorpayId = config('services.razorpay.razorpay_key');
           $razorpaykey = config('services.razorpay.razorpay_secret');

           $api = new Api($razorpayId, $razorpaykey);
           
           //  In Razorpay you have to convert rupees into paise we multiply by 100
           // Currency will be INR
           // Creating Order

           $order = $api->order->create(array(
               'receipt'         => $receipt_id,
               'amount'          => $planamount * 100, // 39900 rupees in paise
               'currency'        => 'INR'
           ));

           // Let's return the response
           // Let's create the razorpay payment page


           $response = [
               'orderId' => $order['id'],
               'razorpayId' => $razorpayId, // Enter the Key ID generated from the Dashboard
               'amount' => $planamount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
               'name' => $data->name,
               'currency' => 'INR',
               'email' => $data->email,
               'ContactNumber' => $data->phone_number,
               "description" => "Test Transaction",
           ];



           Order::create([
               'customer_id' => $data->id,
               'customer_name' => $data->name,
               'razorpay_order_id' => $order['id'],
               'amount' => $planamount,
           ]);


           return view('pages.backend.customer.razorpay_paymentpage', compact('response'));

        }else if(Auth::user()->role == 'Admin'){


             // Generate Random Receipt ID
             $receipt_id = Str::random(20);

             $razorpayId = config('services.razorpay.razorpay_key');
             $razorpaykey = config('services.razorpay.razorpay_secret');
 
             $api = new Api($razorpayId, $razorpaykey);
             
             //  In Razorpay you have to convert rupees into paise we multiply by 100
             // Currency will be INR
             // Creating Order
 
             $order = $api->order->create(array(
                 'receipt'         => $receipt_id,
                 'amount'          => $request->all()['planamount'] * 100, // 39900 rupees in paise
                 'currency'        => 'INR'
             ));
 
             // Let's return the response
             // Let's create the razorpay payment page
 
 
             $response = [
                 'orderId' => $order['id'],
                 'razorpayId' => $razorpayId, // Enter the Key ID generated from the Dashboard
                 'amount' => $request->all()['planamount'] * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                 'name' => $request->all()['customername'],
                 'currency' => 'INR',
                 'email' => $request->all()['customeremail'],
                 'ContactNumber' => $request->all()['customerphoneno'],
                 "description" => "Test Transaction",
             ];
 
            
 
             Order::create([
                 'customer_id' => $request->all()['customer_id'],
                 'customer_name' => $request->all()['customername'],
                 'razorpay_order_id' => $order['id'],
                 'amount' => $request->all()['planamount'],
             ]);


             return view('pages.backend.customer.razorpay_paymentpage', compact('response'));
         
        }
    }


    public function paymentverify(Request $request)
    {

        $today = Carbon::now()->format('Y-m-d');
        $month = date("M",strtotime($today));

        $Latest_order = Order::where('customer_id', '=', Auth::user()->customer_id)->where('status', '=', 'Paid')->latest('id')->first();
        if($Latest_order != ''){
            $installment = $Latest_order->installment + 1;
        }else {
            $installment = 1;
        }

        $razorpayId = config('services.razorpay.razorpay_key');
        $razorpaykey = config('services.razorpay.razorpay_secret');

        $api = new Api($razorpayId, $razorpaykey);

        $attributes = [
            'razorpay_order_id' => $request->input('razorpay_order_id'),
            'razorpay_payment_id' => $request->input('razorpay_payment_id'),
            'razorpay_signature' => $request->input('razorpay_signature'),
        ];

        try {
            $api->utility->verifyPaymentSignature($attributes);

            Order::where('razorpay_order_id', $request->input('razorpay_order_id'))->update([
                'razorpay_payment_id' => $request->input('razorpay_payment_id'),
                'razorpay_signature' => $request->input('razorpay_signature'),
                'status' => 'Paid',
                'date' => $today,
                'month' => $month,
                'installment' => $installment,
            ]);


            if($request->input('razorpay_payment_id') != ''){

                $customer = Customer::findOrFail(Auth::user()->customer_id);
                $pending_month = $customer->pending_month - 1;
                $customer->pending_month = $pending_month;
                $customer->update();

            }
            

          

            return redirect()->route('customer.index')->with('message', 'Payment Successfull !');

        } catch(SignatureVerificationError $e){

            return redirect()->route('customer.index')->with('message', 'Payment Failed !');
        }

        



        //$razorpay_payment_id = $request->all()['razorpay_payment_id'];
       // $razorpay_signature = $request->all()['razorpay_signature'];


    }



    public function edit($id)
    {
        $CustomerData = Customer::findOrFail($id);

        return view('pages.backend.customer.edit', compact('CustomerData'));
    }



    public function update(Request $request, $id)
    {
       

        $CustomerData = Customer::findOrFail($id);
        $CustomerData->phone_number = $request->get('phone_number');
        $CustomerData->address = $request->get('address');
        $CustomerData->alternate_mobileno = $request->get('alternate_mobileno');


        $CustomerData->update();

      

        return redirect()->route('customer.index')->with('info', 'Updated !');
    }



    public function recept_print($id)
    {
        $OrderData = Order::findOrFail($id);
        $today = Carbon::now()->format('Y-m-d');


        return view('pages.backend.customer.recept_print', compact('OrderData', 'today'));
    }
}
