<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Selamat datang di Laravel 11';
});


Route::get('/welcome', function () {
    return 'Selamat datang di Laravel 11';
});
