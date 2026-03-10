<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PengaduanController;

/*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

/*
|--------------------------------------------------------------------------
| Profil
|--------------------------------------------------------------------------
*/
Route::prefix('profil')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('profil');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur-organisasi', [ProfilController::class, 'struktur'])->name('struktur');
    Route::get('/tugas-fungsi', [ProfilController::class, 'tugasFungsi'])->name('tugas-fungsi');
    Route::get('/pejabat', [ProfilController::class, 'pejabat'])->name('pejabat');
});

/*
|--------------------------------------------------------------------------
| Berita
|--------------------------------------------------------------------------
*/
Route::prefix('berita')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('berita');
    Route::get('/{slug}', [BeritaController::class, 'show'])->name('berita.show');
});

/*
|--------------------------------------------------------------------------
| Layanan
|--------------------------------------------------------------------------
*/
Route::prefix('layanan')->group(function () {
    Route::get('/', [LayananController::class, 'index'])->name('layanan');
    Route::get('/sisda', [LayananController::class, 'sisda'])->name('layanan.sisda');
    Route::get('/e-padungku', [LayananController::class, 'ePadungku'])->name('layanan.e-padungku');
    Route::get('/irigasiku', [LayananController::class, 'irigasiku'])->name('layanan.irigasiku');
    Route::get('/e-bantekbgn', [LayananController::class, 'eBantekbgn'])->name('layanan.e-bantekbgn');
});

/*
|--------------------------------------------------------------------------
| Dokumen
|--------------------------------------------------------------------------
*/
Route::prefix('dokumen')->group(function () {
    Route::get('/', [DokumenController::class, 'index'])->name('dokumen');
    Route::get('/{id}/download', [DokumenController::class, 'download'])->name('dokumen.download');
});

/*
|--------------------------------------------------------------------------
| Galeri
|--------------------------------------------------------------------------
*/
Route::prefix('galeri')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('galeri');
    Route::get('/foto', [GaleriController::class, 'foto'])->name('galeri.foto');
    Route::get('/video', [GaleriController::class, 'video'])->name('galeri.video');
});

/*
|--------------------------------------------------------------------------
| Pengaduan
|--------------------------------------------------------------------------
*/
Route::prefix('pengaduan')->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::post('/kirim', [PengaduanController::class, 'kirim'])->name('pengaduan.kirim');
});