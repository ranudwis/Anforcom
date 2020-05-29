<?php

Route::get('/', 'AuthController@index');
Route::post('/auth', 'AuthController@store');
Route::get('/auth/{competition}/register', 'AuthController@register');
Route::get('/auth/competition', 'AuthController@competition');
Route::post('/auth/login', 'AuthController@login');
Route::get('/dashboard', 'AuthController@dashboard');
