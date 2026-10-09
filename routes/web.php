<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/destinasi', function () {
    return view('destination');
});

Route::get('/rentcar', function () {
    return view('rentcar');
});