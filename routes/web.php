<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/secure-area/login', [AuthController::class, 'login']);
