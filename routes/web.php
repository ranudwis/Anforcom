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
