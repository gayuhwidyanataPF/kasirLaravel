<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StokgudangController;
use App\Http\Controllers\JenisBarangController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/akun', UsersController::class);


Route::resource('/pemasok',PemasokController::class);
Route::resource('/gudang',GudangController::class);
Route::resource('/jenisBarang',JenisBarangController::class);
Route::resource('/toko',TokoController::class);
Route::resource('/barang',BarangController::class);
Route::resource('/stokGudang',StokgudangController::class);

