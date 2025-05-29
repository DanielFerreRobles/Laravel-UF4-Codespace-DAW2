<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FutbolistaController;


Route::get('/', function () {
    return view('hola');
});


Route::resource('players', FutbolistaController::class);
