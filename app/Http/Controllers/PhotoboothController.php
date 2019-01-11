<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PhotoboothController extends Controller
{
    public function step1()
    {
        $photos = Photo::orderBy('id', 'desc')->take(5)->get();

        return view('photobooth.step1', compact('photos'));
    }

    public function step2()
    {
        return view('photobooth.step2');
    }

    public function step3()
    {
        return view('photobooth.step3');
    }

    public function step4()
    {
        $photo = DB::table('photos')->orderBy('created_at', 'desc')->first();
        return view('photobooth.step4', compact('photo'));
    }

    public function uploadPhoto()
    {
        $filename = $this->getNextNumberFilename();
        $localFileName = collect(scandir(public_path('storage/photobooth')))->sort()->last();

        $path = public_path('storage/photobooth/' . $localFileName);
        $localFile = \File::get($path);
        Storage::disk('custom-ftp')->put('/subsites/message-in-a-bottle.kristof.vanaken.mtantwerp.eu/public/storage/photobooth/' . $filename . '.jpg', $localFile);

        $photo = new Photo();
        $photo->name = $filename;
        $photo->save();

        return response()->json(['status' => 'success']);
    }

    private function getNextNumberFilename()
    {
        $lastFileName = collect(scandir(public_path('storage/photobooth')))->sort()->last();
        $lastFileName = (int)explode('.', $lastFileName)[0];
        return str_pad($lastFileName, 3, '0', STR_PAD_LEFT);
    }
}
