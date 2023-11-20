<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function index()
    {
        $data = Expense::where('soft_delete', '!=', 1)->get();
        $today = Carbon::now()->format('Y-m-d');
        return view('pages.backend.expense.index', compact('data', 'today'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Expense();

        $data->unique_key = $randomkey;
        $data->date = $request->get('date');
        $data->description = $request->get('description');
        $data->amount = $request->get('amount');

        $data->save();

        return redirect()->route('expense.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $ExpenseData = Expense::where('unique_key', '=', $unique_key)->first();

        $ExpenseData->date = $request->get('date');
        $ExpenseData->description = $request->get('description');
        $ExpenseData->amount = $request->get('amount');

        $ExpenseData->update();

        return redirect()->route('expense.index')->with('info', 'Updated !');
    }

    public function delete($unique_key)
    {
        $data = Expense::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('expense.index')->with('warning', 'Deleted !');
    }
}
