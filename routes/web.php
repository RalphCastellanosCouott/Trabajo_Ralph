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

Route::get('/habilidades', function () {
    return view('habilidades');
});

Route::get('/academia', function () {
    return view('academia');
});