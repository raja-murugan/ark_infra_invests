<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReferenceController extends Controller
{
    public function index()
    {
        $data = Reference::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.reference.index', compact('data'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Reference();

        $data->unique_key = $randomkey;
        $data->name = $request->get('name');
        $data->phone_no = $request->get('phone_no');
        $data->address = $request->get('address');

        $data->save();

        return redirect()->route('reference.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $referenceData = Reference::where('unique_key', '=', $unique_key)->first();

        $referenceData->name = $request->get('name');
        $referenceData->phone_no = $request->get('phone_no');
        $referenceData->address = $request->get('address');

        $referenceData->update();

        return redirect()->route('reference.index')->with('info', 'Updated !');
    }

    public function delete($unique_key)
    {
        $data = Reference::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('reference.index')->with('warning', 'Deleted !');
    }
}
