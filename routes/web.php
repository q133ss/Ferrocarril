<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/account', function (){
        return view('account');
    })->name('account');

    Route::get('/applications', [App\Http\Controllers\ApplicationController::class , 'index'])->name('applications.index');
    Route::get('/application/{id}', [App\Http\Controllers\ApplicationController::class , 'detail'])->name('applications.detail');
    Route::post('/hide-app/{id}', [App\Http\Controllers\ApplicationController::class , 'hide'])->name('applications.hide');
    Route::post('/application/index/search', [App\Http\Controllers\ApplicationController::class , 'indexSearch'])->name('applications.index.search');
    Route::get('/applications/history', [App\Http\Controllers\ApplicationController::class , 'history'])->name('applications.history');

    Route::get('/complaints', [App\Http\Controllers\ComplaintsController::class , 'index'])->name('complaints.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
