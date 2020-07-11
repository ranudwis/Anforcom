<?php

Route::get('/comingsoon', 'ComingSoonController@index')->name('comingsoon');

Route::get('/', 'HomepageController@index')->middleware('needevents')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/masuk', 'auth.login')->name('login');
    Route::post('/masuk', 'AuthController@login')->name('login');

    Route::get('/registrasi', 'AuthController@register')->name('register');
    Route::post('/registrasi', 'AuthController@store')->name('register');
});

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::prefix('/lomba')
    ->name('competition.')
    ->middleware('needevents')
    ->group(function () {
        Route::get('/', 'CompetitionPageController@index')->name('index');
        Route::get('/{competition}', 'CompetitionPageController@show')->name('show');
    });

Route::prefix('/daftar')
    ->name('enroll.')
    ->middleware('enrollment')->group(function () {
        Route::get('/', 'EnrollmentController@index')->name('index');
        Route::get('/{event}', 'EnrollmentController@show')->name('show');
        Route::post('/{event}', 'EnrollmentController@enroll')->name('create');
    });

Route::prefix('/dashboard')
    ->namespace('Dashboard')
    ->name('dashboard.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'DashboardPageController@index')->name('index');

        Route::get('/timeline', 'TimelineController@index')->name('timeline');

        Route::get('/event/{event}', 'EventController@show')->name('event.show');

        Route::get('/pembayaran/{event}', 'PaymentController@show')->name('payment');
        Route::post('/pembayaran/{event}', 'PaymentController@pay')->name('payment');

        //ini halaman percobaan
        Route::view('/tim', 'dashboard.tim')->name('tim');
        Route::view('/tugas', 'dashboard.tugas')->name('tugas');
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
        Route::get('/task/{event_id}', 'TaskController@formtask')->name('formtask');
        Route::post('/task', 'TaskController@addTask')->name('task');

        Route::get('/timeline', 'TimelineController@index')->name('timeline');
        Route::get('/timeline/{event}', 'TimelineController@show')->name('timeline.show');
        Route::post('/timeline/{event_id}', 'TimelineController@store')->name('timeline.store');

        Route::post('/event/{event}/registertimeline', 'EventController@setRegisterTimeline')
            ->name('event.registertimeline');
    });
