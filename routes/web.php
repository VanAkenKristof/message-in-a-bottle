<?php

Route::get('/step1', 'PhotoboothController@step1')->name('photobooth.step1');
Route::get('/step2', 'PhotoboothController@step2')->name('photobooth.step2');
Route::get('/step3', 'PhotoboothController@step3')->name('photobooth.step3');
Route::get('/step4', 'PhotoboothController@step4')->name('photobooth.step4');

Route::post('/upload-photo', 'PhotoboothController@uploadPhoto')->name('upload.photo');
