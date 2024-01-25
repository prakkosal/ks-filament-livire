<?php

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


Route::apiResource('post', App\Http\Controllers\PostController::class);

Route::apiResource('category', App\Http\Controllers\CategoryController::class);

Route::apiResource('tag', App\Http\Controllers\TagController::class);

Route::apiResource('user', App\Http\Controllers\UserController::class);
