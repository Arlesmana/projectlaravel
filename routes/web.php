<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KonsultasiController;
use App\Filament\Resources\PesananResource;

Route::get('/', function () {
    return view('index');
});

Route::get('/pesanan/{id}', [PesananController::class, 'show'])->name('pesanan.show');


