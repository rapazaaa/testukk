<?php

use App\Http\Controllers\APIGuruController;
use App\Http\Controllers\APISiswaController;
use App\Http\Controllers\APIIndustriController;
use App\Http\Controllers\APIPklController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("guru", APIGuruController::class);
Route::apiResource("siswa", APISiswaController::class);
Route::apiResource("industri", APIIndustriController::class);
Route::apiResource("pkl", APIPklController::class);