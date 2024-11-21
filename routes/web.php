<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foobar-laravel', function () {
    return view('foobar-laravel');
});