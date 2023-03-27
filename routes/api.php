<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('/profiles')->group(function () {
    Route::post('/', \App\Http\Controllers\Profiles\StoreController::class);
    Route::get('/{name}', \App\Http\Controllers\Profiles\ShowController::class);
});
