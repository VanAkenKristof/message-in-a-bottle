<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $photos = DB::table('photos')->orderBy('created_at', 'desc')->paginate(9);

        return view('website.photos', compact('photos'));
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
