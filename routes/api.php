<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;




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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/post', [ModuleController::class, 'postData'])->name('post');

// Route::get('/get-user', [ModuleController::class, 'getUser']);
// Route::get('/module', [ModuleController::class,'index'])->middleware('auth:sanctum');

Route::post('/login', [ApiController::class,'login'])->name('login');
Route::post('/logout', [ApiController::class,'logout'])->middleware('auth:sanctum');
