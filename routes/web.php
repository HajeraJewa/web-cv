<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CVController::class, 'index'])->name('home');

