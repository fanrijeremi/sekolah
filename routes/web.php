<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama menggunakan HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk form admin (hindari duplikasi route)
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/submit', [AdminController::class, 'submit'])->name('admin.submit');

// Route untuk form guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

// Route untuk form siswa

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa'); // Untuk halaman awal siswa (pilih kelas)
Route::post('/siswa/show', [SiswaController::class, 'show'])->name('siswa.show'); // Untuk menampilkan jadwal setelah memilih kelas

// Route untuk form-siswa view (jika ingin view statis)
Route::get('/form-siswa', function () {
    return view('form-siswa');
})->name('form-siswa');
