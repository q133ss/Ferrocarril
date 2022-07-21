<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/application/create', [App\Http\Controllers\API\v1\ApplicationController::class, 'store']);
});

Route::post('/login', [App\Http\Controllers\API\v1\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\API\v1\AuthController::class, 'register']);
