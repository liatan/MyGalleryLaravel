<?php

Route::get('/', function () {
    return view('main');
})->name('homepage');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/random_image', function () {
    return view('random_image');
})->name('random_image');

Route::get('/registration', function () {
    return view('registration_form');
})->name('registration');

Route::post('/registration/submit', 'RegistrationController@submit')->name('reg_submit');

Route::get('/authorization', function () {
    return view('log_on_form');
})->name('authorization');




