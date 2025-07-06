<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Click\GetClicksController;
use App\Http\Controllers\Click\StoreClickController;
use App\Http\Controllers\Click\ForwardClicksController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('clicks')->name('clicks.')->group(function () {
    Route::get('/', GetClicksController::class);
    Route::post('/', StoreClickController::class);
    Route::post('/forward', ForwardClicksController::class);
});
