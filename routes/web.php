<?php

Route::get('/comingsoon', 'ComingSoonController@index')->name('comingsoon');

Route::get('/', 'AuthController@index')->name('home');
Route::post('/auth', 'AuthController@store');
Route::get('/auth/{competition}/register', 'AuthController@register');
Route::get('/auth/competition', 'AuthController@competition');
Route::post('/auth/login', 'AuthController@login');
Route::get('/dashboard', 'AuthController@dashboard');
<<<<<<< HEAD
Route::get('/logout', 'AuthController@logout');
=======

Route::prefix('/admin')->group(function () {
    Route::view('/', 'admin.index');
});
>>>>>>> 90bf2889d975e00ae870de5b8aec8aa2bae2c31f
