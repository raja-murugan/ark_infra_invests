<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.payment.index', compact('data'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Payment();

        $data->unique_key = $randomkey;
        $data->name = $request->get('name');

        $data->save();

        return redirect()->route('payment.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $paymentData = Payment::where('unique_key', '=', $unique_key)->first();

        $paymentData->name = $request->get('name');

        $paymentData->update();

        return redirect()->route('payment.index')->with('info', 'Updated !');
    }

    public function delete($unique_key)
    {
        $data = Payment::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('payment.index')->with('warning', 'Deleted !');
    }
}
