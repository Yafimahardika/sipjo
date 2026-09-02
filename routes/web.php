<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// HALAMAN UTAMA
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// UMUM
Route::prefix('umum')->group(function () {
    Route::get('/menu', function () {
        return view('pages.umum.menu');
    })->name('umum.menu');
    
    Route::get('/profil', function () {
        return view('pages.umum.profil');
    })->name('umum.profil');

    Route::get('/struktur', function () {
        return view('pages.umum.struktur');
    })->name('umum.struktur');


    Route::get('/pengumuman', function () {
        return view('pages.umum.pengumuman');
    })->name('umum.pengumuman');
});

// TAHAPAN
Route::get('tahapan', function () {
    return view('pages.tahapan.index');
})->name('tahapan');

// PELAYANAN
Route::prefix('pelayanan')->group(function () {
    Route::get('/menu', function () {
        return view('pages.pelayanan.menu');
    })->name('pelayanan.menu');
    Route::get('/cek-dpt', function () {
        return view('pages.pelayanan.cek-dpt');
    })->name('pelayanan.cek-dpt');
    Route::get('/cek-partai', function () {
        return view('pages.pelayanan.cek-partai');
    })->name('pelayanan.cek-partai');
    Route::get('/informasi', function () {
        return view('pages.pelayanan.informasi');
    })->name('pelayanan.informasi');
});

// HASIL PEMILU
Route::prefix('hasil-pemilu')->group(function () {
    Route::get('menu', function () {
        return view('pages.hasil-pemilu.menu');
    })->name('hasil-pemilu.menu');

    // PPWP
    Route::get('ppwp', function () {
        return view('pages.hasil-pemilu.ppwp');
    })->name('hasil-pemilu.ppwp');
    // DPR RI
    Route::get('dpr-ri', function () {
        return view('pages.hasil-pemilu.dpr-ri');
    })->name('hasil-pemilu.dpr-ri');
    // DPD RI
    Route::get('dpd-ri', function () {
        return view('pages.hasil-pemilu.dpd-ri');
    })->name('hasil-pemilu.dpd-ri');
    // DPRD PROV
    Route::get('dprd-prov', function () {
        return view('pages.hasil-pemilu.dprd-prov');
    })->name('hasil-pemilu.dprd-prov');
    // DPRD KAB
    Route::get('dprd-kab', function () {
        return view('pages.hasil-pemilu.dprd-kab');
    })->name('hasil-pemilu.dprd-kab');
    // PILGUB
    Route::get('pilgub', function () {
        return view('pages.hasil-pemilu.pilgub');
    })->name('hasil-pemilu.pilgub');
    // PILKADA
    Route::get('pilkada', function () {
        return view('pages.hasil-pemilu.pilkada');
    })->name('hasil-pemilu.pilkada');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
