<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\szakdogakController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/* Route::get('/szakdogak', [szakdogakController::class, 'index']);
Route::post('/szakdogak', [szakdogakController::class, 'store']); */
Route::apiResource('szakdogak', szakdogakController::class);