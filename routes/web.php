<?php

Route::get('/', function () {
    $lastFileName = collect(scandir(storage_path('photobooth')))->sort()->last();
    $lastFileName = explode('.', $lastFileName)[0];


});



Route::get('/step1', 'PhotoboothController@step1');
Route::get('/step2', 'PhotoboothController@step2');
Route::get('/step3', 'PhotoboothController@step3');
Route::get('/step4', 'PhotoboothController@step4');

Route::post('/upload-photo', 'PhotoboothController@uploadPhoto')->name('upload.photo');