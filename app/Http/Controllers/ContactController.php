<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = new Contact();

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone = $request->get('phone');
        $data->area = $request->get('area');

        $data->save();

        return redirect()->back();
    }


    public function index()
    {
        $data = Contact::All();
        return view('pages.backend.contactus.index', compact('data'));
    }
}
