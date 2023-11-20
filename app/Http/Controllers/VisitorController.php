<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;


class VisitorController extends Controller
{
    public function index()
    {
        $data = Visitor::where('soft_delete', '!=', 1)->get();
        $today = Carbon::now()->format('Y-m-d');
        return view('pages.backend.visitor.index', compact('data', 'today'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Visitor();

        $data->unique_key = $randomkey;
        $data->name = $request->get('name');
        $data->location = $request->get('location');
        $data->contact_number = $request->get('contact_number');
        $data->description = $request->get('description');

        $data->save();

        return redirect()->route('visitor.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $VisitorData = Visitor::where('unique_key', '=', $unique_key)->first();

        $VisitorData->name = $request->get('name');
        $VisitorData->location = $request->get('location');
        $VisitorData->contact_number = $request->get('contact_number');
        $VisitorData->description = $request->get('description');

        $VisitorData->update();

        return redirect()->route('visitor.index')->with('info', 'Updated !');
    }

    public function delete($unique_key)
    {
        $data = Visitor::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('visitor.index')->with('warning', 'Deleted !');
    }
}
