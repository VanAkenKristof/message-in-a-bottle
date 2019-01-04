<?php

Route::get('/', 'WebsiteController@index')->name('index');


//photobooth
Route::middleware(['AuthenticateRouteMiddleware'])->group(function () {
    Route::get('/step1', 'PhotoboothController@step1')->name('photobooth.step1');
    Route::get('/step2', 'PhotoboothController@step2')->name('photobooth.step2');
    Route::get('/step3', 'PhotoboothController@step3')->name('photobooth.step3');
    Route::get('/step4', 'PhotoboothController@step4')->name('photobooth.step4');

    Route::post('/upload-photo', 'PhotoboothController@uploadPhoto')->name('upload.photo');
});


//website
Route::middleware(['AuthenticateRouteMiddlewareWebsite'])->group(function () {
    Route::get('/about', 'WebsiteController@about')->name('website.about');
    Route::get('/home', 'WebsiteController@home')->name('website.home');
    Route::get('/personalised', 'WebsiteController@personalised')->name('website.personalised');
    Route::get('/photos', 'WebsiteController@photos')->name('website.photos');
    Route::get('/search', 'WebsiteController@search')->name('website.search');
    Route::get('/vote', 'WebsiteController@vote')->name('website.vote');
    Route::get('/voted', 'WebsiteController@voted')->name('website.voted');
});
