<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('', function () {
    return view('user.hero');
});
// User
Route::middleware('auth', 'role:user')->group(function () {

    Route::get('user/lapangan', [LapanganController::class, 'view'])->name('user.lapangan');
    Route::get('user/lapangan/pemesanan/{id}', [BookingController::class, 'pilihjam'])->name('user.lapangan-pemesanan');
    Route::post('/user/lapangan/pemesanan/simpan', [BookingController::class, 'simpanPemesanan'])->name('user.simpan-pemesanan');
    Route::get('/user/pesanan/bayar/{id}', [BookingController::class, 'bayarBooking'])->name('user.bayarBooking');
    Route::get('/user/pesanan/bayar/sukses/{id}', [BookingController::class, 'bayarsukses'])->name('user.bayarsukses');
    Route::get('user/lapangan/invoice', function () {
        return view('user.invoice');
    });

    Route::get('user/pesanan', [BookingController::class, 'viewPesanan'])->name('user.pesanan');
    Route::get('user/profile', [ProfileController::class, 'get'])->name('user.profil');
    Route::get('/user/pesanan/batal/{id}', [BookingController::class, 'batalBooking'])->name('user.batalBooking');
});

// Admin
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('admin/dataUser', function () {
        return view('admin.index');
    });
    Route::get('admin/dataPemesanan', function () {
        return view('admin.Pemesanan');
    });
    Route::get('admin/dataLapangan', function () {
        return view('admin.Lapangan');
    });
});

require __DIR__ . '/auth.php';
