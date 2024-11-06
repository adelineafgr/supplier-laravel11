<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StokController;

Route::get('/', function () {
    return view('home');
});

// Rute untuk menampilkan semua data
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/pinjamBarang', [PinjamBarangController::class, 'index'])->name('pinjambarang.index');
Route::get('/barangMasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
Route::get('/barangKeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');

// Rute untuk menampilkan form membuat baru
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');
Route::get('/pinjamBarang/create', [PinjamBarangController::class, 'create'])->name('pinjamBarang.create');
Route::get('/barangMasuk/create', [BarangMasukController::class, 'create'])->name('barangmasuk.create');
Route::get('/barangKeluar/create', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');

// Rute untuk menambahkan data baru
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
Route::get('/pinjamBarang', [PinjamBarangController::class, 'store'])->name('pinjamBarang.store');
Route::get('/barangMasuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
Route::get('/barangKeluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');


// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::get('stok/{stok}', [StokController::class, 'edit'])->name('stok.edit');
Route::get('/pinjamBarang/{pinjambarang}', [PinjamBarangController::class, 'edit'])->name('pinjamBarang.edit');
Route::get('/barangMasuk/{barangmasuk}', [BarangMasukController::class, 'edit'])->name('barangmasuk.edit');
Route::get('/barangKeluar/{barangkeluar}', [BarangKeluarController::class, 'edit'])->name('barangkeluar.edit');

// Route untuk mengupdate data 
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::put('/stok/{stok}', [StokController::class, 'update'])->name('stok.update');
Route::get('/pinjamBarang/{pinjambarang}', [PinjamBarangController::class, 'update'])->name('pinjamBarang.update');
Route::get('/barangMasuk/{barangmasuk}', [BarangMasukController::class, 'update'])->name('barangmasuk.update');
Route::get('/barangKeluar/{barangkeluar}', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');

// Route untuk menghapus data 
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::delete('/stok/{stok}', [StokController::class, 'destroy'])->name('stok.destroy');
Route::get('/pinjamBarang/{pinjambarang}', [PinjamBarangController::class, 'destroy'])->name('pinjamBarang.destroy');
Route::get('/barangMasuk/{barangmasuk}', [BarangMasukController::class, 'destroy'])->name('barangmasuk.destroy');
Route::get('/barangKeluar/{barangkeluar}', [BarangKeluarController::class, 'destroy'])->name('barangkeluar.destroy');
