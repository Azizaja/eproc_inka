<?php

use App\Http\Controllers\AksesPelaksanaPengadaanController;
use App\Http\Controllers\PersiapanPengadaanController;
use App\Http\Controllers\SettingPersiapanController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::resource('persiapan-pengadaan', PersiapanPengadaanController::class);
Route::get('persiapan-pengadaan/undangan', [PersiapanPengadaanController::class, 'showUndanganPenyedia'])->name('persiapan-pengadaan.undangan');
Route::resource('setting-persiapan', SettingPersiapanController::class);
Route::resource('akses-pelaksana-pengadaan', AksesPelaksanaPengadaanController::class);

