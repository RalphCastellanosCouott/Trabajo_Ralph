<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biografia', function () {
    return view('biografia');
});

Route::get('/experiencia-laboral', function () {
    return view('explaboral');
});