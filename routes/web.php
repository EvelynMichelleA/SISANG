<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanPengeluaranController;
use App\Http\Controllers\LaporanTransaksiPenjualanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PengeluaranController;
use App\Models\Menu;
use App\Http\Controllers\TransaksiPenjualanController;

Route::get('/transaksi-penjualan', [TransaksiPenjualanController::class, 'index'])->name('transaksipenjualan.index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/pengguna', [UserController::class, 'index'])->name('user.index');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.index');
Route::get('/laporan-transaksi', [LaporanTransaksiPenjualanController::class, 'index']);
Route::get('/laporan-pengeluaran', [LaporanPengeluaranController::class, 'index']);