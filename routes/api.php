<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/create', [SeriesController::class, 'create']);
Route::post('/series/save', [SeriesController::class, 'store']);
Route::delete('/series/remove/{id}', [SeriesController::class, 'destroy']);
