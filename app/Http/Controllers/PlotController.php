<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use App\Models\BookingPlot;
use App\Models\BookingPayment;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlotController extends Controller
{
    public function index()
    {
        $data = Plot::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.plot.index', compact('data'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Plot();

        $data->unique_key = $randomkey;
        $data->plot_no = $request->get('plot_no');
        $data->Sq_ft = $request->get('Sq_ft');
        $data->block = $request->get('block');
        $data->rate_per_Sq_ft = $request->get('rate_per_Sq_ft');
        $data->facing = $request->get('facing');

        $data->save();


        return redirect()->route('plot.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $plotData = Plot::where('unique_key', '=', $unique_key)->first();

        $plotData->plot_no = $request->get('plot_no');
        $plotData->Sq_ft = $request->get('Sq_ft');
        $plotData->block = $request->get('block');
        $plotData->rate_per_Sq_ft = $request->get('rate_per_Sq_ft');
        $plotData->facing = $request->get('facing');

        $plotData->update();

        return redirect()->route('plot.index')->with('info', 'Updated !');
    }

    public function delete($unique_key)
    {
        $data = Plot::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('plot.index')->with('warning', 'Deleted !');
    }



    public function Getplots()
    {
        $booking_block = request()->get('booking_block');
        $GetPlot = Plot::where('block', '=', $booking_block)->where('status', '=', 'open')->where('soft_delete', '!=', 1)->get();
        $userData['data'] = $GetPlot;

        if (isset($userData) & !empty($userData)) {
            echo json_encode($userData);
        }else{
            echo json_encode(
                array('status' => 'false')
            );
        }
    }

    public function plotsforPayment()
    {
        $booking_block = request()->get('booking_block');
        $GetPlot = Plot::where('block', '=', $booking_block)->where('soft_delete', '!=', 1)->get();
        $userData['data'] = $GetPlot;

        if (isset($userData) & !empty($userData)) {
            echo json_encode($userData);
        }else{
            echo json_encode(
                array('status' => 'false')
            );
        }
    }
    public function Getplotsqarefeet()
    {
        $plot_id = request()->get('plot_id');
        $GetPlot = Plot::findOrFail($plot_id);
        $userData['data'] = $GetPlot->Sq_ft;
        echo json_encode($userData);
    }


    public function GetPlotsBookedDetails()
    {
        $plot_id = request()->get('plot_id');
        $GetBokkedPlot = BookingPlot::where('plot_id', '=', $plot_id)->first();
        if($GetBokkedPlot != ""){

            $BookingData = Booking::findOrFail($GetBokkedPlot->booking_id);

            $booking_payments = [];
            $paid_terms = [];

            $BookingPayment = BookingPayment::where('booking_id', '=', $GetBokkedPlot->booking_id)->where('plot_id', '=', $plot_id)->get();
            if($BookingPayment != ""){
                foreach ($BookingPayment as $key => $BookingPaymentarr) {
                    $paid_terms[] = array(
                        'bill_no' => $BookingPaymentarr->bill_no,
                        'payment_method' => $BookingPaymentarr->payment_method,
                        'terms' => $BookingPaymentarr->terms,
                        'payableamount' => $BookingPaymentarr->payableamount,
                    );
                }
            }else {
                $paid_terms = [];
            }
            

            $booking_payments[] = array(
                'customername' => $BookingData->customername,
                'address' => $BookingData->address .' , ' . $BookingData->street . ' , ' . $BookingData->area . ' , ' . $BookingData->city . ' - ' . $BookingData->pincode,
                'mobileno' => $BookingData->mobileno,
                'square_feet' => $GetBokkedPlot->square_feet,
                'ratepersqft' => $GetBokkedPlot->ratepersqft,
                'total' => $GetBokkedPlot->total,
                'paid_amount' => $GetBokkedPlot->paid_amount,
                'balance_amount' => $GetBokkedPlot->balance_amount,
                'booking_id' => $GetBokkedPlot->booking_id,
                'plot_no' => $GetBokkedPlot->plot_no,
                'booking_plot_id' => $GetBokkedPlot->id,
                'paid_terms' => $paid_terms,
            );

        }

        if (isset($booking_payments) & !empty($booking_payments)) {
            echo json_encode($booking_payments);
        }else{
            echo json_encode(
                array('status' => 'false')
            );
        }
    }


    public function status_update($unique_key)
    {
        $data = Plot::where('unique_key', '=', $unique_key)->first();

        $data->status = 2;

        $data->update();

        return redirect()->route('plot.index')->with('warning', 'Updated !');
    }


    public function status_update_edit($unique_key)
    {
        $data = Plot::where('unique_key', '=', $unique_key)->first();

        $data->status = 'open';

        $data->update();

        return redirect()->route('plot.index')->with('msg', 'Updated !');
    }
}
