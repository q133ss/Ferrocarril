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

Route::post('/login', [App\Http\Controllers\API\v1\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\API\v1\AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function(){
    Route::post('/application/create', [App\Http\Controllers\API\v1\ApplicationController::class, 'store']);
    Route::get('/my-orders', [\App\Http\Controllers\API\v1\ApplicationController::class, 'get']);

    Route::post('/complaint/create', [\App\Http\Controllers\API\v1\ComplaintsController::class, 'store']);
    Route::get('/my-complaints', [\App\Http\Controllers\API\v1\ComplaintsController::class, 'get']);

    Route::get('/user-info', [\App\Http\Controllers\API\v1\UserController::class, 'info']);
    Route::get('/user/{id}', [\App\Http\Controllers\API\v1\UserController::class, 'infoById']);
});
