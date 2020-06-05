<?php

Route::get('/comingsoon', 'ComingSoonController@index')->name('comingsoon');

Route::view('/', 'homepage')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/masuk', 'auth.login')->name('login');
    Route::post('/masuk', 'AuthController@login')->name('login');

    Route::get('/daftar', 'AuthController@register')->name('register');
    Route::post('/daftar', 'AuthController@store')->name('register');
});

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::prefix('/lomba')->name('competition.')->group(function () {
    Route::get('/', 'CompetitionPageController@index')->name('index');
    Route::get('/{competition}', 'CompetitionPageController@show')->name('show');
});

Route::middleware('auth')->group(function () {
    Route::get('/daftar/{event}', 'EnrollmentController@index')->name('enroll');
    Route::post('/daftar/{event}', 'EnrollmentController@enroll')->name('enroll');
});

Route::prefix('/dashboard')
    ->namespace('Dashboard')
    ->name('dashboard.')
    ->middleware('auth')
    ->group(function () {
        Route::view('/', 'dashboard.index')->name('index');

        Route::view('/pembayaran', 'dashboard.payment')->name('payment');
        Route::post('/pembayaran', 'PaymentController@pay')->name('payment');
    });


Route::prefix('/admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::view('/', 'admin.index')->name('index');

        Route::get('/pembayaran', 'PaymentController@index')->name('payment');
        Route::get('/pembayaran/{team}/konfirmasi', 'PaymentController@confirm')->name('payment.confirm');
        Route::get('/pembayaran/{team}/tolak', 'PaymentController@reject')->name('payment.reject');
        Route::get('/pembayaran/{team}/hapus', 'PaymentController@delete')->name('payment.delete');

        Route::view('/sponsor', 'admin.sponsor')->name('sponsor');
        Route::post('/sponsor', 'SponsorController@uploadSponsor')->name('sponsor');
        Route::view('/medpart', 'admin.medpart')->name('medpart');
        Route::post('/medpart', 'MedpartController@uploadMedpart')->name('medpart');

        Route::get('/task', 'TaskController@index')->name('task');
        Route::post('/task', 'TaskController@addTask')->name('task');

        Route::get('/timeline', 'TimelineController@index')->name('timeline');
        Route::get('/timeline/{event}', 'TimelineController@show')->name('timeline.show');
        Route::post('/timeline/{event_id}', 'TimelineController@store')->name('timeline.store');

        Route::post('/event/{event}/registertimeline', 'EventController@setRegisterTimeline')
            ->name('event.registertimeline');
    });
