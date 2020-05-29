<?php

Route::get('/comingsoon', 'ComingSoonController@index')->name('comingsoon');

Route::get('/', 'AuthController@index')->name('home');
Route::post('/auth', 'AuthController@store');
Route::get('/auth/{competition}/register', 'AuthController@register');
Route::get('/auth/competition', 'AuthController@competition');
Route::post('/auth/login', 'AuthController@login');
Route::get('/dashboard', 'AuthController@dashboard');
Route::get('/logout', 'AuthController@logout');
Route::get('/dashboard/payment', 'AuthController@edit');
Route::post('/dashboard/postpayment', 'AuthController@update');

Route::prefix('/admin')->group(function () {
    Route::view('/', 'admin.index');
});
