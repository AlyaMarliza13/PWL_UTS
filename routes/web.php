<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\list_filmsController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('Logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class,"index"]);
    Route::resource('/list_films', list_filmsController::class);
    Route::resource('/Pelanggan', PelangganController::class);
    Route::resource('/Peminjaman', PeminjamanController::class);
    Route::resource('/Pengembalian', PengembalianController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
