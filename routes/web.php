<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin', [
        'title' => 'Halaman Admin'
    ]);
});

Route::resource('/pemasok', \App\Http\Controllers\PemasokController::class);
Route::resource('/gudang', \App\Http\Controllers\GudangController::class);
Route::resource('/jenisBarang', \App\Http\Controllers\JenisBarangController::class);
Route::resource('/toko', \App\Http\Controllers\TokoController::class);
Route::resource('/barang', \App\Http\Controllers\BarangController::class);
