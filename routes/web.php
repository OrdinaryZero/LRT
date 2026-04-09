<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

// 1. Jalur untuk halaman Beranda (Portal)
Route::get('/', function () {
    return view('beranda'); 
})->name('beranda');

// 2. Jalur untuk menampilkan Form Laporan
Route::get('/form-lapor', [ReportController::class, 'index'])->name('lapor.index');

// 3. Jalur untuk memproses data dari Form Laporan ke Database & WA
Route::post('/form-lapor', [ReportController::class, 'store'])->name('lapor.store');