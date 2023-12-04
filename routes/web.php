<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "homepage"])->name("homepage");
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('home',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::get('user',[HomeController::class,'user'])->middleware(['auth','admin'])->name('user');

Route::get('dashboard/latihan',[DashboardController::class,'module'] )->middleware('auth');
Route::get('dashboard/laporan',[DashboardController::class,'report'] )->middleware('auth');
Route::get('/webgl',[DashboardController::class,'materi'] )->middleware('auth');
Route::get('/ganti-password',[DashboardController::class,'change_password'] )->middleware('auth');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
