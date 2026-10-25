<?php

use App\http\Controllers\praktikumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bio', function () {
    return view('bio');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/Produk', function () {
    return view('Produk');
});

Route::get('/Aplikasi Lrvl', function () {
    return view('Aplikasi Lrvl');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Transaksi', function () {
    return view('Transaksi');
});

Route::get('/Laporan', function () {
    return view('Laporan');
});

Route::get('/DATA PENDUDUK', function () {
    return view('DATA PENDUDUK');
});

Route::get('home', function () {
    return view('home');
});
Route::get('tampil-produk', [ProdukController::class, 'index']);

Route::get('tambah-produk', [ProdukController::class, 'create' ])->name('produk.create' );

Route::post('tampil-produk', [ProdukController::class, 'store' ] )->name('produk.store');

Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');

Route::post('/produk/edit/{id}', [ProdukController::class, 'update'])->name('produk.update');

Route::post('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');

Route::get('/produk/chart', [ProdukController::class, 'chart'])->name('chart');

//Routing Kategori
Route::controller(KategoriController:: class)->group(function() {
    Route::get ('tampil-kategori', 'index');
    Route::get ('tambah-kategori', 'create' )->name('kategori.create');
    Route::post ('tampil-kategori', 'store' )->name('kategori.store');
    Route::get ('/kategori/edit/{id}', 'edit')->name('kategori.edit');
    Route::post ('/kategori/edit/{id}', 'update' )->name('kategori.update' );
    Route::post('/kategori/delete/{id}', 'destroy' )->name('kategori.delete');
    Route::get('/produk/export/excel', [ProdukController::class, 'excel'])->name('produk.excel');
    Route::get('/produk/export/pdf', [ProdukController::class, 'pdf'])->name('produk.pdf');
    });
    Route::middleware( ['auth', 'admin' ] )->group(function () {
        Route::get ('/tampil-produk', [ProdukController :: class, 'index'] );
        Route::get ('/tambah-produk', [ProdukController :: class, 'create' ])->name('produk.create');
        Route::post('tampil-produk', [ProdukController :: class, 'store'] )->name('produk.store' );
        Route::get ('/produk/edit/{id}', [ProdukController :: class, 'edit'])->name('produk.edit');
        Route::post('/produk/edit/{id}', [ProdukController :: class, 'update' ])->name('produk.update' );
        Route::post ('/produk/delete/{id}', [ProdukController :: class, 'destroy' ])->name('produk.delete');
    });      
        //Routing Kategori
        Route::middleware( ['auth', 'admin' ])->group(function() {
        Route::get ('tampil-kategori', [KategoriController :: class, 'index' ] );
        Route::get ('tambah-kategori', [KategoriController :: class, 'create'] )->name('kategori.create');
        Route::post ('tampil-kategori', [KategoriController :: class, 'store'] )->name('kategori.store');
        Route::get ('/kategori/edit/{id}', [KategoriController :: class, 'edit'])->name('kategori.edit');
        Route::post('/kategori/edit/{id}', [KategoriController :: class, 'update'])->name('kategori.update' );
        Route::post ('/kategori/delete/{id}', [KategoriController :: class, 'destroy' ])->name('kategori.delete' );
        Route::get ('/laporan',[LaporanController::class, 'index' ])->middleware('auth','kasir
        ' );

    });