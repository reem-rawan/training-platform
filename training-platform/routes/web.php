<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return 'Ariam Dashboard';
});
Route::get('/register', [AuthController::class, 'register']);