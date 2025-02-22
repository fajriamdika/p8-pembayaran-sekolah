<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ManajemenDataController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaturanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/login/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::get('/login/keuangan', [KeuanganController::class, 'index'])->name('keuangan');
Route::get('/login/manajemen-data', [ManajemenDataController::class, 'index'])->name('manajemen-data');
Route::get('/login/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('/login/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
