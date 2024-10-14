<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StageApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//les routes de lapi pour les stages
Route::get('/Stage', [StageApiController::class, 'index'])->name('listedtage');
Route::post('/Stage', [StageApiController::class, 'store'])->name('poststage');
Route::get('/Stage/{id}', [StageApiController::class, 'show'])->name('stageinfo');
Route::put('/Stage/{id}', [StageApiController::class, 'update'])->name('putstage');

