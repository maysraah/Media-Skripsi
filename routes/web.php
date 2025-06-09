<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SiswaController,
    RegisterController,
    LoginController,
    DashboardController,
    HomeController,
    MateriController,
    KuisController,
    NilaiController
};

// Halaman umum
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/petunjuk', [HomeController::class, 'petunjuk'])->name('petunjuk');
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/siswa/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/materi/{bab}/{page}', [MateriController::class, 'index'])->name('siswa.materi');

// Logout (butuh login)
Route::middleware('auth')->get('/logout', [LoginController::class, 'logout'])->name('login.logout');

// Route untuk GURU
Route::middleware(['auth', 'role:guru'])->prefix('guru')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard_guru'])->name('dashboard-guru');
    Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data-siswa');
    Route::get('/data-nilai', [NilaiController::class, 'data_nilai'])->name('data-nilai');
    Route::post('/data-nilai/hapus', [NilaiController::class, 'hapusNilaiSiswa'])->name('nilai.hapus');
    Route::get('/nilai/export-pdf', [NilaiController::class, 'exportPDF'])->name('nilai.export.pdf');
    Route::get('/nilai/export-pdf-per-kelas', [NilaiController::class, 'exportPDFPerKelas'])->name('nilai.exportPDFPerKelas');
});

// Route untuk SISWA
Route::middleware(['auth', 'role:siswa'])->group(function () {
    // Kuis Linear
    Route::get('/kuis/pencarian_linear', [KuisController::class, 'kuis_linear'])->name('siswa.kuis_linear');
    Route::get('/kuis_linear', [KuisController::class, 'index_linear'])->name('kuis.kuis_linear');
    Route::post('/siswa/kuis-linear/submit', [KuisController::class, 'submitLinear'])->name('kuis.linear.submit');
    Route::get('/siswa/kuis-linear/hasil/{id}', [KuisController::class, 'hasilLinear']);

    // Kuis Biner
    Route::get('/kuis/pencarian_biner', [KuisController::class, 'kuis_biner'])->name('siswa.kuis_biner');
    Route::get('/kuis_biner', [KuisController::class, 'index_biner'])->name('kuis.kuis_biner');
    Route::post('/siswa/kuis-biner/submit', [KuisController::class, 'submitLinear'])->name('kuis.biner.submit');
    Route::get('/siswa/kuis-biner/hasil/{id}', [KuisController::class, 'hasilBiner']);

    // Kuis Sentinel
    Route::get('/kuis/pencarian_sentinel', [KuisController::class, 'kuis_sentinel'])->name('siswa.kuis_sentinel');
    Route::get('/kuis_sentinel', [KuisController::class, 'index_sentinel'])->name('kuis.kuis_sentinel');
    Route::post('/siswa/kuis-sentinel/submit', [KuisController::class, 'submitSentinel'])->name('kuis.sentinel.submit');
    Route::get('/siswa/kuis-sentinel/hasil/{id}', [KuisController::class, 'hasilSentinel']);

    // Kuis Sentinel
    Route::get('/siswa/evaluasi', [KuisController::class, 'evaluasi'])->name('siswa.evaluasi');
    Route::get('/evaluasi', [KuisController::class, 'index_evaluasi'])->name('kuis.evaluasi');
    Route::post('/siswa/evaluasi/submit', [KuisController::class, 'submitEvaluasi'])->name('kuis.evaluasi.submit');
    Route::get('/siswa/evaluasi/hasil/{id}', [KuisController::class, 'hasilEvaluasi']);
});