<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoboothController extends Controller
{
    public function step1()
    {

    }

    public function step2()
    {

    }

    public function step3()
    {
        return view('step3');
    }

    public function step4()
    {

    }

    public function uploadPhoto(Request $request)
    {
        return response()->json(['status' => 'success', 'image' => $request->image]);
    }
}
