<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OpportunityController;
use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\GraduateController;

Route::get('/opportunities', [OpportunityController::class, 'index']);
Route::get('/opportunities/{id}', [OpportunityController::class, 'show']);

Route::post('/applications', [ApplicationController::class, 'store']);
Route::get('/graduates/{id}/applications', [ApplicationController::class, 'myApplications']);

Route::get('/graduates/{id}', [GraduateController::class, 'show']);
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);