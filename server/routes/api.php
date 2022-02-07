<?php

use App\Http\Controllers\inhabitantsController;
use Illuminate\Support\Facades\Route;


Route::get('/inhabitants', [inhabitantsController::class, 'list']);
Route::get('/inhabitants/{id}', [inhabitantsController::class, 'detail']);
Route::post('/inhabitants', [inhabitantsController::class, 'create']);
Route::put('/inhabitants/{id}', [inhabitantsController::class, 'modify']);
Route::delete('/inhabitants/{id}', [inhabitantsController::class, 'delete']);
