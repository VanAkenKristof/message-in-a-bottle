<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        if (env('PHOTOBOOTH')) {
            return redirect(route('photobooth.step1'));
        }

        return redirect(route('website.home'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function home()
    {
        return view('website.home');
    }

    public function personalised()
    {
        return view('website.personalised');
    }

    public function photos()
    {
        return view('website.photos');
    }

    public function search()
    {
        return view('website.search');
    }

    public function vote()
    {
        return view('website.vote');
    }

    public function voted()
    {
        return view('website.voted');
    }
}
