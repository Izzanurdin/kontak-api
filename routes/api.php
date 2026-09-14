<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ⚠️ WAJIB IMPORT 2 CONTROLLER INI
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContactController;

// Public Routes (Bisa diakses siapa saja)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes (Wajib bawa Bearer Token Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('kontak', ContactController::class);
});