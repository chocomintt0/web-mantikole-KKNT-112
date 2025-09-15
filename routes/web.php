<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\InfografisDemografisController;
use App\Http\Controllers\LayananDesaController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminLayananController;
use App\Http\Controllers\PublicBeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::resource('beranda', BerandaController::class);
Route::resource('profil-desa', ProfilDesaController::class);
Route::resource('infografis', InfografisDemografisController::class);
// GUNAKAN BARIS INI SEBAGAI PENGGANTI
Route::get('layanan', [LayananDesaController::class, 'index'])->name('layanan.index');
// Route::resource('layanan', LayananDesaController::class);
// Route::resource('admin-berita', AdminBeritaController::class);

Route::resource('admin-berita', AdminBeritaController::class)
    ->parameters(['admin-berita' => 'berita']);

// Route::resource('admin-layanan', AdminLayananController::class)
//     ->parameters(['admin-layanan' => 'admin-layanan']);

Route::resource('admin-layanan', AdminLayananController::class)
    ->parameters(['admin-layanan' => 'adminLayanan']);

// Route::get('/berita/{slug}', [PublicBeritaController::class, 'show'])
//     ->name('berita.show');

// Route::get('/berita/{slug}', [AdminBeritaController::class, 'publicShow'])
//     ->name('berita.show');

Route::get('/berita/{slug}', [PublicBeritaController::class, 'show'])
    ->name('berita.show');