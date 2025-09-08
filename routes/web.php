<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biografia', function () {
    return view('biografia');
});

Route::get('/academia', function () {
    return view('academia');
});