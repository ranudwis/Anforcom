<?php

Route::get('/comingsoon', 'ComingSoonController@index')->name('comingsoon');

Route::view('/', 'homepage')->name('home');

Route::view('/masuk', 'auth.login')->name('login');
Route::post('/masuk', 'AuthController@login')->name('login');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/daftar', 'AuthController@competition')->name('register');
Route::get('/daftar/{competition}', 'AuthController@register')->name('register.competition');
Route::post('/daftar', 'AuthController@store')->name('register');

Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard');
Route::get('/dashboard/payment', 'AuthController@edit')->name('dashboard.payment');
Route::post('/dashboard/postpayment', 'AuthController@update')->name('dashboard.payment');

Route::prefix('/admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::view('/', 'admin.index')->name('index');

        Route::get('/pembayaran', 'PaymentController@index')->name('payment');
        Route::get('/pembayaran/{team}/konfirmasi', 'PaymentController@confirm')->name('payment.confirm');
        Route::get('/pembayaran/{team}/tolak', 'PaymentController@reject')->name('payment.reject');
        Route::get('/pembayaran/{team}/hapus', 'PaymentController@delete')->name('paymenet.delete');
    });
