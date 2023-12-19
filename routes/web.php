<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ModuleController;

use App\Policies\AdminPolicy;
use App\Policies\UserPolicy;
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

Route::get('dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('home',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::resource('dashboard/user', AdminUserController::class)->middleware('admin');
Route::post('/deleteuser/{id}', [AdminUserController::class, 'destroy'])->name('deleteuser')->middleware('admin');

Route::get('/updateuser/{id}', [AdminUserController::class, 'edit']);
Route::put('/updateuser/{userId}', [AdminUserController::class, 'update'])->name('updateuser')->middleware('admin');
Route::post('/resetpassword/{userId}', [AdminUserController::class, 'resetpassword'])->name('resetpassword')->middleware('admin');



Route::get('/pendinguser', [AdminUserController::class, 'pending'])->name('pendinguser')->middleware('admin');
Route::patch('/approve-pending', [AdminUserController::class, 'updateAllPending'])->name('pendinguser')->middleware('admin');
Route::post('/dashboard/user/update-pending/{userId}', [AdminUserController::class, 'updatePending'])->name('update-pending')->middleware('admin');

Route::get('dashboard/modul',[DashboardController::class,'module'] )->middleware('auth');
Route::get('/dashboard/modul/sequence',[DashboardController::class,'lampuDetail'] )->middleware('auth');
Route::get('/dashboard/modul/comparation',[DashboardController::class,'sepatuDetail'] )->middleware('auth');
Route::get('/dashboard/modul/sense-of-number',[DashboardController::class,'belanjaDetail'] )->middleware('auth');

Route::get('/lampu',[ModuleController::class,'lampu'] )->name('lampu')->middleware('auth');
Route::get('/sepatu',[ModuleController::class,'sepatu'] )->name('sepatu')->middleware('auth');
Route::get('/belanja',[ModuleController::class,'belanja'] )->name('belanja')->middleware('auth');

Route::get('/dashboard/laporan/search', [ModuleController::class, 'search'])->name('dashboard.laporan.search')->middleware('auth');

Route::get('dashboard/laporan',[ModuleController::class,'index'] )->middleware('auth');
Route::post('deletereport', [ModuleController::class, 'destroy'])->name('deletereport')->middleware('admin');

Route::get('/dashboard/ganti-password',[DashboardController::class,'change'] )->middleware('auth');

Route::post('/unity-data', [ModuleController::class, 'postData'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
