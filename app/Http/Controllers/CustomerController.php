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


            $Orderdata = Order::where('customer_id', '=', Auth::user()->customer_id)->orderBy('id', 'DESC')->get();
            

            // $novfrom_date = 2023-11-15;
            // $novto_date = 2023-11-30;

            // $decfrom_date = 2023-12-15;
            // $decto_date = 2023-12-31;


            // $janfrom_date = 2024-01-15;
            // $janto_date = 2024-01-31;

            // $febfrom_date = 2024-02-15;
            // $febto_date = 2024-02-29;

            // $marfrom_date = 2024-03-15;
            // $marto_date = 2024-03-31;
            
            // $aprfrom_date = 2024-04-15;
            // $aprto_date = 2024-04-30;

            // $mayfrom_date = 2024-05-31;
            // $mayto_date = 2024-05-31;

            // $junfrom_date = 2024-06-15;
            // $junto_date = 2024-06-30;

            // $julyfrom_date = 2024-07-15;
            // $julyto_date = 2024-07-31;

            // $augfrom_date = 2024-8-15;
            // $augto_date = 2024-8-31;

            // $sepfrom_date = 2024-9-15;
            // $septo_date = 2024-9-30;

            // $octfrom_date = 2024-10-15;
            // $octto_date = 2024-10-31;

            return view('pages.backend.customer.index', compact('customer', 'today', 'planamount', 'plan', 'total_month', 'status', 'phoneno', 'Orderdata'));

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
            return view('pages.backend.customer.index', compact('Customer_data', 'today', 'plan', 'planamount', 'total_month', 'status', 'phoneno', 'Orderdata'));
        }
    }

    public function create()
    {
        $today = Carbon::now()->format('Y-m-d');
        $timenow = Carbon::now()->format('H:i');

        return view('pages.backend.customer.create', compact('today', 'timenow'));
    }



    public function store(Request $request)
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

        $user = User::findOrFail($request->get('userid'));
        $user->customer_id = $data->id;
        $user->role = 'Admin';
        $user->update();


        if($request->get('plan') == 'prosper'){
            $planamount = 1000;
        }else if($request->get('plan') == 'jackpot'){
            $planamount = 1500;
        }

        //return redirect()->route('customer.payment', ['customerid' => $data->id, 'planamount' => $planamount])->with('message', 'Added !');
        return redirect()->route('customer.index')->with('message', 'Added !');
    }


   // private $razorpayId = "rzp_test_Pkkbzx5Jv2PbXn";
   // private $razorpaykey = "hXmr6R0g461B3qMnn37kyDg7";


    public function payment_request(Request $request)
    {
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
        
    
        //dd($order);
        return view('pages.backend.customer.razorpay_paymentpage', compact('response'));
    }


    public function paymentverify(Request $request)
    {
        $today = Carbon::now()->format('Y-m-d');
        $month = date("M",strtotime($today));

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
            ]);

            $customer = Customer::findOrFail(Auth::user()->customer_id);
            $pending_month = $customer->pending_month - 1;
            $customer->pending_month = $pending_month;
            $customer->update();

          

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
}
