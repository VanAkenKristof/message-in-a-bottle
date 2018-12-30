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

    public function uploadPhoto()
    {
        $lastFileName = collect(scandir(storage_path('photobooth')))->sort()->last();
        $lastFileName = explode('.', $lastFileName)[0];

        $filename = $lastFileName++;



        return response()->json(['status' => 'success']);
    }
}
