<?php

use Illuminate\Support\Facades\Route;


// User
Route::middleware('auth', 'role:user')->group(function () {
    Route::get('/home', function () {
        return view('user.hero');
    });
    Route::get('user/lapangan', function () {
        return view('user.lapangan');
    });
    Route::get('user/lapangan/pemesanan', function () {
        return view('user.lapangan-pemesanan');
    });
    Route::get('user/lapangan/invoice', function () {
        return view('user.invoice');
    });
    Route::get('user/pesanan', function () {
        return view('user.pesanan');
    });
    Route::get('user/profile', function () {
        return view('user.profile');
    });
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
