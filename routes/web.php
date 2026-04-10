<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\SuratController;
use App\Models\Laporan;

// 1. Jalur untuk halaman Beranda (Portal)
Route::get('/', function () {
    return view('beranda'); 
})->name('beranda');

// 2. Jalur untuk menampilkan Form Laporan
Route::get('/form-lapor', [ReportController::class, 'index'])->name('lapor.index');

// 3. Jalur untuk memproses data dari Form Laporan ke Database & WA
Route::post('/form-lapor', [ReportController::class, 'store'])->name('lapor.store');

// Halaman Lapor (Yang sudah Anda buat)
Route::get('/lapor', function () {
    return view('lapor');
})->name('lapor.index');

// 4 Halaman Fitur Baru
Route::get('/data-warga', function () {
    return view('data-warga');
})->name('warga.index');

Route::get('/kas-rt', function () {
    return view('kas-rt');
})->name('kas-rt.index');

Route::get('/surat-pengantar', function () {
    return view('surat');
})->name('surat.index');

Route::get('/umkm', function () {
    return view('umkm');
})->name('umkm.index');

Route::get('/profil', function () { return view('profil'); })->name('profil');
Route::get('/acara', function () { return view('acara'); })->name('acara');
Route::get('/lokasi', function () { return view('lokasi'); })->name('lokasi');
Route::get('/informasi', function () { return view('informasi'); })->name('informasi');
Route::get('/galeri', function () { return view('galeri'); })->name('galeri');
Route::get('/live-report', function () { 
    $laporans = Laporan::latest()->take(5)->get();
    return view('live-report', compact('laporans')); 
})->name('live-report');

