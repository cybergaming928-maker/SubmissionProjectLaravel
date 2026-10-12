<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, selamat datang di laravel 13';
});

Route::get('/waktu', fn () => now()->format('d-m-Y H:i:s'));

Route::get('/profil/{dicky}', function (string $dicky) {
    return "Hallo, {$dicky}!";
    });
    
Route::get('/kategori/{Dicky}', function (string $Dicky = 'semua') {
    return "Menampilkan kategori: {$Dicky}";
    });

Route::get('/kelas/{TIC}/mahasiswa/242520142', function (string $TIC) {
    return "Kelas {$TIC}, NIM 242520142";
});