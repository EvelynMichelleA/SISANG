<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Models\Menu;

use App\Http\Controllers\TransaksiPenjualanController;


Route::get('/transaksi-penjualan', [TransaksiPenjualanController::class, 'index'])->name('transaksipenjualan.index');
// Route halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk halaman pengguna, hanya bisa diakses oleh pengguna yang sudah login
Route::get('/pengguna', [PenggunaController::class, 'index'])
    ->name('pengguna.index');
Route::get('/menu', [MenuController::class, 'index'])
    ->name('menu.index');
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
