<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TmntController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NawaituController;
use App\Http\Controllers\NowayhomeController;
use App\Http\Controllers\PowerpuffController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/users/register', [UserController::class, 'register']);
Route::post('/users/login', [UserController::class, 'login']);

// powerpuff
Route::prefix('powerpuff')->group(function () {
    Route::get('/products', [PowerpuffController::class, 'index']);
});

// nowayhome
Route::prefix('nowayhome')->group(function () {
    Route::get('/products', [NowayhomeController::class, 'index']);
});

// tmnt
Route::prefix('tmnt')->group(function () {
    Route::get('/products', [TmntController::class, 'index']);
});

// nawaitu
Route::prefix('nawaitu')->group(function () {
    Route::get('/products', [NawaituController::class, 'index']);
});
