<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoboothController extends Controller
{
    public function step1()
    {
        return "Step 1";
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
        return "done";
    }

    public function uploadPhoto()
    {
        $filename = $this->getNextNumberFilename();
        $localFileName = collect(scandir(storage_path('photobooth-local')))->sort()->last();

        $path = storage_path('photobooth-local/' . $localFileName);
        $image = base64_encode(file_get_contents($path));
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);

        \File::put(public_path('storage/photobooth/' . $filename . '.jpg'), base64_decode($image));

        $photo = new Photo();
        $photo->name = $filename;
        $photo->save();

        return response()->json(['status' => 'success']);
    }

    private function getNextNumberFilename()
    {
        $lastFileName = collect(scandir(public_path('storage/photobooth')))->sort()->last();
        $lastFileName = (int)explode('.', $lastFileName)[0];
        return str_pad($lastFileName+1, 3, '0', STR_PAD_LEFT);
    }
}
