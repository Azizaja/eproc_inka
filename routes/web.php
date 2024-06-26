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
Route::get('/persiapan-pengadaan', [PersiapanPengadaanController::class, 'index'])->name('persiapan-pengadaan.index');
Route::get('/persiapan-pengadaan/show/{id}', [PersiapanPengadaanController::class, 'showPekerjaan'])->name('persiapan-pengadaan.show');
Route::get('persiapan-pengadaan/undang-penyedia/{id}', [PersiapanPengadaanController::class, 'showUndanganPenyedia'])->name('persiapan-pengadaan.undangan');
Route::get('persiapan-pengadaan/konfigurasi-persyaratan', [PersiapanPengadaanController::class, 'showKonfigurasi'])->name('persiapan-pengadaan.konfigurasi-persyaratan');

Route::get('persiapan-pengadaan/sap', [PersiapanPengadaanController::class, 'showSAPRFQ'])->name('persiapan-pengadaan.sap');
Route::get('persiapan-pengadaan/sap/show/{id}', [PersiapanPengadaanController::class, 'showDetailRFQ'])->name('persiapan-pengadaan.detailRFQ');
Route::get('persiapan-pengadaan/sap/create-pengadaan/{id}', [PersiapanPengadaanController::class, 'createPengadaan'])->name('persiapan-pengadaan.createPengadaan');
// Route::resource('setting-persiapan', SettingPersiapanController::class);

Route::get('/persiapan-pengadaan/setting-persiapan-pengadaan/{id}', [SettingPersiapanController::class, 'show'])->name('setting-persiapan.show');
Route::post('/persiapan-pengadaan/setting-persiapan-pengadaan', [SettingPersiapanController::class, 'updateSettingPersiapanPengadaan'])->name('setting-persiapan.store');

Route::get('/persiapan-pengadaan/akses-pelaksana-pengadaan/{id}', [AksesPelaksanaPengadaanController::class, 'show'])->name('akses-pelaksana-pengadaan.show');

Route::post('/store-sub-bidang', [SettingPersiapanController::class, 'storeSubBidang'])->name('store-sub-bidang');
Route::post('/store-sub-commodity', [SettingPersiapanController::class, 'storeSubCommodity'])->name('store-sub-commodity');
Route::delete('/delete-sub-bidang/{id}', [SettingPersiapanController::class, 'deleteSubBidang'])->name('delete-sub-bidang');
Route::delete('/delete-sub-commodity/{id}', [SettingPersiapanController::class, 'deleteSubCommodity'])->name('delete-sub-commodity');
Route::post('/get-bidang', [SettingPersiapanController::class, 'getBidang'])->name('get-bidang');
Route::post('/get-sub-bidang', [SettingPersiapanController::class, 'getSubBidang'])->name('get-sub-bidang');
Route::post('/get-m-sub-commodity', [SettingPersiapanController::class, 'getMSubCommodity'])->name('get-m-sub-commodity');
