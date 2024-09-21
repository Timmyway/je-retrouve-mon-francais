<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('pages.home');
Route::get('/quotes', function () {
    return view('pages.quotes');
})->name('pages.quotes');
