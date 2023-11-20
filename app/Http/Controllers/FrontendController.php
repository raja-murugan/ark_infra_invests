<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome()
    {
        return view('pages.frontend.index');
    }

    public function about()
    {
        return view('pages.frontend.about');
    }

    public function amenities()
    {
        return view('pages.frontend.amenities');
    }

    public function benefits()
    {
        return view('pages.frontend.benefits');
    }

    public function contact()
    {
        return view('pages.frontend.contact');
    }

    public function gallery()
    {
        return view('pages.frontend.gallery');
    }
}
