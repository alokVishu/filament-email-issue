<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verify', function () {
    return view('verify');
})->name('verification.notice');
