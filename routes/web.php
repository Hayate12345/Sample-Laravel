<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lesson', function () {
    return view('lesson');
});

Route::get('/', [Controller::class, 'index'])->name('index');
