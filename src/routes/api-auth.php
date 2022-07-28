<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Auth;

Route::prefix('auth')->group(function () {
    Route::post('login', [Auth\AuthController::class, 'login']);
    Route::post('register', [Auth\AuthController::class, 'register']);

    Route::prefix('')->middleware('auth:sanctum')->group(function () {
        Route::post('logout', [Auth\AuthController::class, 'logout']);
        Route::get('me', [Auth\AuthController::class, 'me']);
    });
});
