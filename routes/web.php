<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');
