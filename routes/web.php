<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('hola');
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::resource('futbolistas', FutbolistaController::class);
