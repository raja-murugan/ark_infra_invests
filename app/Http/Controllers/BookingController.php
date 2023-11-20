<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Booking;
use App\Models\BookingPlot;
use App\Models\Plot;
use App\Models\Reference;
use App\Models\Payment;
use App\Models\BookingPayment;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use PDF;

class BookingController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

        $data = Booking::where('date', '=', $today)->where('soft_delete', '!=', 1)->get();
        $plot_terms = [];
        $bookings = [];
        foreach ($data as $key => $datas) {

            $BookingPlots = BookingPlot::where('booking_id', '=', $datas->id)->get();
            foreach ($BookingPlots as $key => $BookingPlots_arr) {

                $plot_id = Plot::findOrFail($BookingPlots_arr->plot_id);
                $plot_terms[] = array(
                    'projectname' => $BookingPlots_arr->projectname,
                    'block' => $BookingPlots_arr->block,
                    'plot_id' => $BookingPlots_arr->plot_id,
                    'plot_no' => $plot_id->plot_no,
                    'Sq_ft' => $plot_id->Sq_ft,
                    'rate_per_Sq_ft' => $plot_id->rate_per_Sq_ft,
                    'facing' => $plot_id->facing,
                    'booking_id' => $BookingPlots_arr->booking_id,
                    'total' => $BookingPlots_arr->total,
                    'paid_amount' => $BookingPlots_arr->paid_amount,
                    'balance_amount' => $BookingPlots_arr->balance_amount,
                    'id' => $BookingPlots_arr->id,
                );

            }

            $reference = Reference::findOrFail($datas->reference);

            $bookings[] = array(
                'unique_key' => $datas->unique_key,
                'date' => $datas->date,
                'customername' => $datas->customername,
                'fathername' => $datas->fathername,
                'husbandname' => $datas->husbandname,
                'mobileno' => $datas->mobileno,
                'idproofone' => $datas->idproofone,
                'idproof_no' => $datas->idproof_no,
                'proofimage_one' => $datas->proofimage_one,
                'idprooftwo' => $datas->idprooftwo,
                'proofimage_two' => $datas->proofimage_two,
                'address' => $datas->address,
                'street' => $datas->street,
                'area' => $datas->area,
                'city' => $datas->city,
                'pincode' => $datas->pincode,
                'dateof_site_visit' => $datas->dateof_site_visit,
                'reference' => $datas->reference,
                'block' => $datas->block,
                'referencename' => $reference->name,
                'id' => $datas->id,
                'plot_terms' => $plot_terms,
            );
        }

        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('soft_delete', '!=', 1)->get();
        return view('pages.backend.booking.index', compact('bookings', 'today', 'Reference', 'Plot'));
        
    }



    public function datefilter(Request $request) {
        $today = $request->get('from_date');


        $data = Booking::where('date', '=', $today)->where('soft_delete', '!=', 1)->get();
        $plot_terms = [];
        $bookings = [];
        foreach ($data as $key => $datas) {

            $BookingPlots = BookingPlot::where('booking_id', '=', $datas->id)->get();
            foreach ($BookingPlots as $key => $BookingPlots_arr) {

                $plot_id = Plot::findOrFail($BookingPlots_arr->plot_id);
                $plot_terms[] = array(
                    'projectname' => $BookingPlots_arr->projectname,
                    'block' => $BookingPlots_arr->block,
                    'plot_id' => $BookingPlots_arr->plot_id,
                    'plot_no' => $plot_id->plot_no,
                    'Sq_ft' => $plot_id->Sq_ft,
                    'rate_per_Sq_ft' => $plot_id->rate_per_Sq_ft,
                    'facing' => $plot_id->facing,
                    'booking_id' => $BookingPlots_arr->booking_id,
                    'total' => $BookingPlots_arr->total,
                    'paid_amount' => $BookingPlots_arr->paid_amount,
                    'balance_amount' => $BookingPlots_arr->balance_amount,
                    'id' => $BookingPlots_arr->id,
                );

            }

            $reference = Reference::findOrFail($datas->reference);

            $bookings[] = array(
                'unique_key' => $datas->unique_key,
                'date' => $datas->date,
                'customername' => $datas->customername,
                'fathername' => $datas->fathername,
                'husbandname' => $datas->husbandname,
                'mobileno' => $datas->mobileno,
                'idproofone' => $datas->idproofone,
                'idproof_no' => $datas->idproof_no,
                'proofimage_one' => $datas->proofimage_one,
                'idprooftwo' => $datas->idprooftwo,
                'proofimage_two' => $datas->proofimage_two,
                'address' => $datas->address,
                'street' => $datas->street,
                'area' => $datas->area,
                'city' => $datas->city,
                'pincode' => $datas->pincode,
                'dateof_site_visit' => $datas->dateof_site_visit,
                'reference' => $datas->reference,
                'block' => $datas->block,
                'referencename' => $reference->name,
                'id' => $datas->id,
                'plot_terms' => $plot_terms,
            );
        }

        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('soft_delete', '!=', 1)->get();
        return view('pages.backend.booking.index', compact('bookings', 'today', 'Reference', 'Plot'));
    }




    public function create()
    {
        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('status', '=', 'open')->where('soft_delete', '!=', 1)->get();
        $today = Carbon::now()->format('Y-m-d');

        return view('pages.backend.booking.create', compact('Reference', 'Plot', 'today'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);
        $Booking = new Booking();
        $Booking->unique_key = $randomkey;
        $Booking->date = $request->get('date');
        $Booking->customername = $request->get('customername');
        $Booking->fathername = $request->get('fathername');
        $Booking->mobileno = $request->get('mobileno');
        $Booking->idproofone = $request->get('idproofone');
        $Booking->idproof_no = $request->get('idproof_no');
        $Booking->address = $request->get('address');
        $Booking->street = $request->get('street');
        $Booking->area = $request->get('area');
        $Booking->city = $request->get('city');
        $Booking->pincode = $request->get('pincode');
        $Booking->dateof_site_visit = $request->get('dateof_site_visit');
        $Booking->reference = $request->get('reference');
        $Booking->save();


        $insertedId = $Booking->id;

        foreach ($request->get('plot_id') as $key => $plot_id) {

            $Getplot = Plot::findOrFail($plot_id);
            $total = $Getplot->Sq_ft * $Getplot->rate_per_Sq_ft;

            $BookingPlot = new BookingPlot;
            $BookingPlot->booking_id = $insertedId;
            $BookingPlot->projectname = 'ERAIVAN NAGAR';
            $BookingPlot->block = $request->booking_block[$key];
            $BookingPlot->plot_id = $plot_id;
            $BookingPlot->plot_no = $Getplot->plot_no;
            $BookingPlot->square_feet = $request->square_feet[$key];
            $BookingPlot->ratepersqft = $Getplot->rate_per_Sq_ft;
            $BookingPlot->total = $total;
            $BookingPlot->paid_amount = 0;
            $BookingPlot->balance_amount = $total;
            $BookingPlot->save();


            $Updateplot = Plot::findOrFail($plot_id);
            $Updateplot->status = 'Sold';
            $Updateplot->save();
        }

        return redirect()->route('booking.index')->with('message', 'booking Data added successfully!');
    }



    public function edit($unique_key)
    {
        $BookingData = Booking::where('unique_key', '=', $unique_key)->first();
        $BookingPlotdata = BookingPlot::where('booking_id', '=', $BookingData->id)->get();
        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('soft_delete', '!=', 1)->get();
        $today = Carbon::now()->format('Y-m-d');

        return view('pages.backend.booking.edit', compact('Reference', 'Plot', 'today', 'BookingData', 'BookingPlotdata'));
    }



    public function update(Request $request, $unique_key)
    {
        $Booking_Data = Booking::where('unique_key', '=', $unique_key)->first();
        $Booking_Data->date = $request->get('date');
        $Booking_Data->customername = $request->get('customername');
        $Booking_Data->fathername = $request->get('fathername');
        $Booking_Data->mobileno = $request->get('mobileno');
        $Booking_Data->idproofone = $request->get('idproofone');
        $Booking_Data->idproof_no = $request->get('idproof_no');
        $Booking_Data->address = $request->get('address');
        $Booking_Data->street = $request->get('street');
        $Booking_Data->area = $request->get('area');
        $Booking_Data->city = $request->get('city');
        $Booking_Data->pincode = $request->get('pincode');
        $Booking_Data->dateof_site_visit = $request->get('dateof_site_visit');
        $Booking_Data->reference = $request->get('reference');
        $Booking_Data->update();


        $Booking_id = $Booking_Data->id;


        $getinsertedP_Products = BookingPlot::where('booking_id', '=', $Booking_id)->get();
        $Purchaseproducts = array();
        foreach ($getinsertedP_Products as $key => $getinserted_P_Products) {
            $Purchaseproducts[] = $getinserted_P_Products->id;
        }

        $updatedpurchaseproduct_id = $request->bookingplot_id;
        $updated_PurchaseProduct_id = array_filter($updatedpurchaseproduct_id);
        $different_ids = array_merge(array_diff($Purchaseproducts, $updated_PurchaseProduct_id), array_diff($updated_PurchaseProduct_id, $Purchaseproducts));

        if (!empty($different_ids)) {
            foreach ($different_ids as $key => $different_id) {
                BookingPlot::where('id', $different_id)->delete();
            }
        }


        foreach ($request->get('bookingplot_id') as $key => $bookingplot_id) {
            if ($bookingplot_id > 0) {

                $Getplotno = Plot::findOrFail($request->plot_id[$key]);

                $plot_id = $request->plot_id[$key];
                $square_feet = $request->square_feet[$key];
                $plot_no = $Getplotno->plot_no;

                DB::table('booking_plots')->where('id', $bookingplot_id)->update([
                    'booking_id' => $Booking_id,  'block' => $request->booking_block[$key],  'plot_id' => $plot_id,  'plot_no' => $plot_no,  'square_feet' => $square_feet
                ]);

            } else if ($bookingplot_id == '') {

                if ($request->plot_id[$key] > 0) {

                    $Getplot = Plot::findOrFail($request->plot_id[$key]);
                    $total = $Getplot->Sq_ft * $Getplot->rate_per_Sq_ft;

                    $BookingPlot = new BookingPlot;
                    $BookingPlot->booking_id = $Booking_id;
                    $BookingPlot->projectname = 'ERAIVAN NAGAR';
                    $BookingPlot->block = $request->booking_block[$key];
                    $BookingPlot->plot_id = $request->plot_id[$key];
                    $BookingPlot->plot_no = $Getplot->plot_no;
                    $BookingPlot->square_feet = $request->square_feet[$key];
                    $BookingPlot->ratepersqft = $Getplot->rate_per_Sq_ft;
                    $BookingPlot->total = $total;
                    $BookingPlot->paid_amount = 0;
                    $BookingPlot->balance_amount = $total;
                    $BookingPlot->save();


                    $Updateplot = Plot::findOrFail($request->plot_id[$key]);
                    $Updateplot->status = 'Sold';
                    $Updateplot->save();
                }
            }
        }

        return redirect()->route('booking.index')->with('info', 'booking Data Updated successfully!');
    }


    public function delete($unique_key)
    {
        $Booking_Data = Booking::where('unique_key', '=', $unique_key)->first();
        $Booking_Data->soft_delete = 1;
        $Booking_Data->update();
        return redirect()->route('booking.index')->with('warning', 'Deleted !');
    }

    public function payment_create()
    {
        $Plot = Plot::where('status', '=', 'open')->where('soft_delete', '!=', 1)->get();
        $Payment = Payment::where('soft_delete', '!=', 1)->get();
        $today = Carbon::now()->format('Y-m-d');

        return view('pages.backend.booking.payment_create', compact('Payment', 'Plot', 'today'));
    }


    public function payment($plotid, $booking_id)
    {
        $getplot = Plot::findOrFail($plotid);
        $plotno = $getplot->plot_no;
        $BookingData = Booking::findOrFail($booking_id);
        $today = Carbon::now()->format('Y-m-d');
        $Bookingplots = BookingPlot::where('booking_id', '=', $booking_id)->where('plot_id', '=', $plotid)->first();
        $total = $Bookingplots->square_feet * $getplot->rate_per_Sq_ft;
        $totalamount = number_format($total);
        $Payment = Payment::where('soft_delete', '!=', 1)->get();
        $BookingPayment = BookingPayment::where('booking_id', '=', $booking_id)->where('plot_id', '=', $plotid)->get();

        
        return view('pages.backend.booking.payment', compact('today', 'plotid', 'booking_id', 'plotno', 'BookingData', 'Bookingplots', 'getplot', 'totalamount', 'Payment', 'total', 'BookingPayment'));
    }



    public function paymentstore(Request $request)
    {
        $bprandomkey = Str::random(5);

        $s_bill_no = 1;
        $lastbill = BookingPayment::where('soft_delete', '!=', 1)->latest('id')->first();
        if($lastbill != '')
        {
            $added_billno = substr ($lastbill->bill_no, -2);
            $new_bill = '0' . ($added_billno) + 1;
        }else {
            $new_bill = '0' . $s_bill_no;
        }

        $BookingPayment = new BookingPayment();
        $BookingPayment->unique_key = $bprandomkey;
        $BookingPayment->booking_id = $request->get('booking_id');
        $BookingPayment->plot_id = $request->get('plot_id');
        $BookingPayment->date = $request->get('date');
        $BookingPayment->bill_no = $new_bill;
        $BookingPayment->block = $request->get('block');
        $BookingPayment->plot_no = $request->get('plotno');
        $BookingPayment->sqft = $request->get('sqft');
        $BookingPayment->ratepersqft = $request->get('ratepersqft');
        $BookingPayment->totalamount = $request->get('totalamount');
        $BookingPayment->payment_method = $request->get('payment_method');
        $BookingPayment->terms = $request->get('terms');
        $BookingPayment->payableamount = $request->get('payableamount');
        $BookingPayment->save();


        $booking_id = $request->get('booking_id');
        $plot_id = $request->get('plot_id');

        $GetBooking = BookingPlot::where('booking_id', '=', $booking_id)->where('plot_id', '=', $plot_id)->first();

        $newpaid = $GetBooking->paid_amount + $request->get('payableamount');
        $balance = $GetBooking->total - $newpaid;

        $GetBooking->paid_amount = $newpaid;
        $GetBooking->balance_amount = $balance;
        $GetBooking->update();

        return redirect()->route('booking.index')->with('message', 'Payment  added successfully!');
    }



    public function payment_store(Request $request)
    {
        $beprandomkey = Str::random(5);

        $s_bill_no = 1;
        $lastbill = BookingPayment::where('soft_delete', '!=', 1)->latest('id')->first();
        if($lastbill != '')
        {
            $added_billno = substr ($lastbill->bill_no, -2);
            $new_bill = '0' . ($added_billno) + 1;
        }else {
            $new_bill = '0' . $s_bill_no;
        }

        $BookingPayment = new BookingPayment();
        $BookingPayment->unique_key = $beprandomkey;
        $BookingPayment->booking_id = $request->get('payment_bookingid');
        $BookingPayment->plot_id = $request->get('payment_plotid');
        $BookingPayment->date = $request->get('payment_date');
        $BookingPayment->bill_no = $new_bill;
        $BookingPayment->block = $request->get('payment_block');
        $BookingPayment->plot_no = $request->get('payment_plotno');
        $BookingPayment->sqft = $request->get('payment_sqft');
        $BookingPayment->ratepersqft = $request->get('payment_ratepersqft');
        $BookingPayment->totalamount = $request->get('payment_total');
        $BookingPayment->payment_method = $request->get('payment_method');
        $BookingPayment->terms = $request->get('payment_terms');
        $BookingPayment->payableamount = $request->get('payableamount');
        $BookingPayment->save();


        $booking_id = $request->get('payment_bookingid');
        $plot_id = $request->get('payment_plotid');

        $GetBooking = BookingPlot::where('booking_id', '=', $booking_id)->where('plot_id', '=', $plot_id)->first();

        $newpaid = $GetBooking->paid_amount + $request->get('payableamount');
        $balance = $GetBooking->total - $newpaid;

        $GetBooking->paid_amount = $newpaid;
        $GetBooking->balance_amount = $balance;
        $GetBooking->update();

        return redirect()->route('booking.payment_receipt')->with('message', 'Payment  added successfully!');
    }



    public function payment_receipt()
    {
        $today = Carbon::now()->format('Y-m-d');
        $booking_receipts = [];
        $BookingPaymentdata = BookingPayment::orderBy('id', 'desc')->where('soft_delete', '!=', 1)->get();
        foreach ($BookingPaymentdata as $key => $datas) {

            $GetBookingplot = BookingPlot::where('booking_id', '=', $datas->booking_id)->where('plot_id', '=', $datas->plot_id)->first();
            $BookingData = Booking::findOrFail($datas->booking_id);

            $booking_receipts[] = array(
                'unique_key' => $datas->unique_key,
                'booking_id' => $datas->booking_id,
                'plot_id' => $datas->plot_id,
                'date' => $datas->date,
                'bill_no' => $datas->bill_no,
                'block' => $datas->block,
                'plot_no' => $datas->plot_no,
                'sqft' => $datas->sqft,
                'ratepersqft' => $datas->ratepersqft,
                'totalamount' => $datas->totalamount,
                'payment_method' => $datas->payment_method,
                'terms' => $datas->terms,
                'payableamount' => number_format($datas->payableamount),
                'customername' => $BookingData->customername,
            );
        }

        return view('pages.backend.booking.payment_receipt', compact('BookingPaymentdata', 'today', 'booking_receipts'));
    }


    public function receiptdatefilter(Request $request) {
        $today = $request->get('from_date');
        $booking_receipts = [];
        $BookingPaymentdata = BookingPayment::orderBy('id', 'desc')->where('soft_delete', '!=', 1)->get();
        foreach ($BookingPaymentdata as $key => $datas) {

            $GetBookingplot = BookingPlot::where('booking_id', '=', $datas->booking_id)->where('plot_id', '=', $datas->plot_id)->first();
            $BookingData = Booking::findOrFail($datas->booking_id);

            $booking_receipts[] = array(
                'unique_key' => $datas->unique_key,
                'booking_id' => $datas->booking_id,
                'plot_id' => $datas->plot_id,
                'date' => $datas->date,
                'bill_no' => $datas->bill_no,
                'block' => $datas->block,
                'plot_no' => $datas->plot_no,
                'sqft' => $datas->sqft,
                'ratepersqft' => $datas->ratepersqft,
                'totalamount' => $datas->totalamount,
                'payment_method' => $datas->payment_method,
                'terms' => $datas->terms,
                'payableamount' => $datas->payableamount,
                'customername' => $BookingData->customername,
            );
        }

        return view('pages.backend.booking.payment_receipt', compact('BookingPaymentdata', 'today', 'booking_receipts'));
    }



    public function recept_print($unique_key)
    {
        $BookingPaymentdata = BookingPayment::where('unique_key', '=', $unique_key)->first();
        $BookingData = Booking::findOrFail($BookingPaymentdata->booking_id);
        $today = Carbon::now()->format('Y-m-d');
        $total = number_format($BookingPaymentdata->payableamount);


        function AmountInWords(float $amount)
        {
        $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
        // Check if there is any number after decimal
        $amt_hundred = null;
        $count_length = strlen($num);
        $x = 0;
        $string = array();
        $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
            3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
            7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
            10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
            13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
            16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
            19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
            40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
            70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
            $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
            while( $x < $count_length ) {
            $get_divider = ($x == 2) ? 10 : 100;
            $amount = floor($num % $get_divider);
            $num = floor($num / $get_divider);
            $x += $get_divider == 10 ? 1 : 2;
            if ($amount) {
            $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
            $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
            $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
            '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
            '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
                }
        else $string[] = null;
        }
        $implode_to_Rupees = implode('', array_reverse($string));
        $get_paise = ($amount_after_decimal > 0) ? "And " . ($change_words[$amount_after_decimal / 10] . " 
        " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
        return ($implode_to_Rupees ? $implode_to_Rupees . 'Rupees ' : '') . $get_paise;
        }

        $get_amount= AmountInWords($BookingPaymentdata->payableamount);

        return view('pages.backend.booking.recept_print', compact('BookingPaymentdata', 'today', 'BookingData', 'total', 'get_amount'));
    }


    public function receptcash_print($unique_key)
    {
        $BookingPaymentdata = BookingPayment::where('unique_key', '=', $unique_key)->first();
        $today = Carbon::now()->format('Y-m-d');
        $BookingData = Booking::findOrFail($BookingPaymentdata->booking_id);
        $reference = Reference::findOrFail($BookingData->reference);
        $total = number_format($BookingPaymentdata->payableamount);


        function AmountInWords(float $amount)
        {
        $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
        // Check if there is any number after decimal
        $amt_hundred = null;
        $count_length = strlen($num);
        $x = 0;
        $string = array();
        $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
            3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
            7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
            10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
            13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
            16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
            19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
            40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
            70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
            $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
            while( $x < $count_length ) {
            $get_divider = ($x == 2) ? 10 : 100;
            $amount = floor($num % $get_divider);
            $num = floor($num / $get_divider);
            $x += $get_divider == 10 ? 1 : 2;
            if ($amount) {
            $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
            $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
            $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
            '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
            '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
                }
        else $string[] = null;
        }
        $implode_to_Rupees = implode('', array_reverse($string));
        $get_paise = ($amount_after_decimal > 0) ? "And " . ($change_words[$amount_after_decimal / 10] . " 
        " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
        return ($implode_to_Rupees ? $implode_to_Rupees . 'Rupees ' : '') . $get_paise;
        }

        $get_amount= AmountInWords($BookingPaymentdata->payableamount);


        return view('pages.backend.booking.receptcash_print', compact('BookingPaymentdata', 'today', 'BookingData', 'total', 'get_amount', 'reference'));
    }



    public function recept_edit($unique_key)
    {
        $BookingPayment = BookingPayment::where('unique_key', '=', $unique_key)->first();

        $getplot = Plot::findOrFail($BookingPayment->plot_id);
        $plotno = $getplot->plot_no;
        $BookingData = Booking::findOrFail($BookingPayment->booking_id);
        $today = Carbon::now()->format('Y-m-d');

        $Bookingplots = BookingPlot::where('booking_id', '=', $BookingPayment->booking_id)->where('plot_id', '=', $BookingPayment->plot_id)->first();
        $total = $Bookingplots->square_feet * $getplot->rate_per_Sq_ft;
        $totalamount = number_format($total);
        $Payment = Payment::where('soft_delete', '!=', 1)->get();

        $plotid = $BookingPayment->plot_id;
        $booking_id = $BookingPayment->booking_id;

        
        return view('pages.backend.booking.recept_edit', compact('today', 'plotid', 'booking_id', 'plotno', 'BookingData', 'Bookingplots', 'getplot', 'totalamount', 'Payment', 'total', 'BookingPayment', 'unique_key'));

    }



    public function recept_update(Request $request, $unique_key)
    {
        $BookingPayment_Data = BookingPayment::where('unique_key', '=', $unique_key)->first();

        $paidamount = $BookingPayment_Data->payableamount;
        $bookingid = $BookingPayment_Data->booking_id;
        $plot_id = $BookingPayment_Data->plot_id;

        $GetBookingplot = BookingPlot::where('booking_id', '=', $bookingid)->where('plot_id', '=', $plot_id)->first();
        
        $oldpaid = $GetBookingplot->paid_amount;
        $newpaid = $oldpaid - $paidamount;
        $updatedpaid = $newpaid + $request->get('payableamount');
        $newbalance = $GetBookingplot->total - $updatedpaid;

        $GetBookingplot->paid_amount = $updatedpaid;
        $GetBookingplot->balance_amount = $newbalance;
        $GetBookingplot->update();



        $BookingPayment_Data->date = $request->get('date');
        $BookingPayment_Data->payment_method = $request->get('payment_method');
        $BookingPayment_Data->payableamount = $request->get('payableamount');
        $BookingPayment_Data->update();

        return redirect()->route('booking.payment_receipt')->with('info', 'Updated !');
    }



   

    public function receipt_delete($unique_key)
    {
        $BookingPayment = BookingPayment::where('unique_key', '=', $unique_key)->first();

        $paidamount = $BookingPayment->payableamount;
        $bookingid = $BookingPayment->booking_id;
        $plot_id = $BookingPayment->plot_id;

        $GetBookingplot = BookingPlot::where('booking_id', '=', $bookingid)->where('plot_id', '=', $plot_id)->first();
        
        $oldpaid = $GetBookingplot->paid_amount;
        $newpaid = $oldpaid - $paidamount;
        $newbalance = $GetBookingplot->total - $newpaid;

        $GetBookingplot->paid_amount = $newpaid;
        $GetBookingplot->balance_amount = $newbalance;
        $GetBookingplot->update();

        
        $BookingPayment->soft_delete = 1;
        $BookingPayment->update();
        return redirect()->route('booking.index')->with('warning', 'Deleted !');
    }



}
