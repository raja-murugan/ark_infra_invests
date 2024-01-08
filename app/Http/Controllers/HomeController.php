<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

            return view('pages.backend.dashboard', compact('customer', 'today', 'planamount', 'plan', 'total_month', 'status', 'phoneno', 'Orderdata', 'pay_button_status'));

        }else if(Auth::user()->role == 'Super-Admin')
        {

            $ActiveCustomer = Customer::where('soft_delete', '!=', 1)->orderBy('id', 'DESC')->get();
            $Customer_data = [];
            foreach ($ActiveCustomer as $key => $datas) {

                $order_count = Order::where('customer_id', '=', $datas->id)->where('status', '=', 'Paid')->get();
                $total_installmentcount = count(collect($order_count));

                $Customer_data[] = array(
                    'name' => $datas->name,
                    'email' => $datas->email,
                    'phone_number' => $datas->phone_number,
                    'address' => $datas->address,
                    'plan' => $datas->plan,
                    'alternate_mobileno' => $datas->alternate_mobileno,
                    'referred_by' => $datas->referred_by,
                    'status' => $datas->status,
                    'unique_key' => $datas->unique_key,
                    'id' => $datas->id,
                    'total_installmentcount' => $total_installmentcount,
                );

            }


            $INActiveCustomer = User::where('customer_id', '=', NULL)->where('role', '=', NULL)->get();
            $inactiveCustomer_data = [];
            foreach ($INActiveCustomer as $key => $INActive_Customer) {

                $inactiveCustomer_data[] = array(
                    'name' => $INActive_Customer->name,
                    'email' => $INActive_Customer->email
                );

            }





            return view('pages.backend.dashboard', compact('Customer_data', 'inactiveCustomer_data'));

        }else if(Auth::user()->role == ''){
            return view('home');
        }

    }
}
