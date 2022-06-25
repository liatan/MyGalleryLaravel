<?php

Route::get('/', function () {
    return view('main');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/registration', function () {
    return view('registration_form');
});
