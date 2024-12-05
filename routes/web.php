<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\LaporanPengeluaranController;
use App\Http\Controllers\LaporanTransaksiPenjualanController;

// Home route (Login page as default)
Route::get('/', [LoginController::class, 'index'])->name('login');

// Routes for login and logout
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.page');
    Route::post('/login', 'login')->name('login.submit');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/reset-password/{id}', 'resetPass')->name('reset.password');
});

// Routes protected by 'auth' middleware
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Data Master Routes - Restricted to roles: Owner and Supervisor
    Route::prefix('master')->middleware('role:Owner,Supervisor')->group(function () {
        Route::resource('pengguna', PenggunaController::class)->except(['show']);
        Route::resource('menu', MenuController::class)->except(['show']);
        Route::resource('pelanggan', PelangganController::class)->except(['show']);
        Route::get('/laporantransaksipenjualan', [LaporanTransaksiPenjualanController::class, 'index'])->name('laporantransaksipenjualan.index');
        Route::get('/laporanpengeluaran', [LaporanPengeluaranController::class, 'index'])->name('laporanpengeluaran.index');
    });

    // Transaction Routes - Accessible to all authenticated users
    Route::prefix('transaksi-penjualan')->group(function () {
        Route::get('/', [TransaksiPenjualanController::class, 'index'])->name('transaksi-penjualan.index');
    });
});
