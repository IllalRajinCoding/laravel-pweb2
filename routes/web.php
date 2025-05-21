<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Models\book;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/salam/{name}', function ($name) {
    return "Selamat datang $name";
});

Route::get('produk', function () {
    return view('produk/index');
});

Route::get('produk/{id}', function ($id) {
    return view('produk/index', ['idproduk' => $id]);
});

Route::get('/profil', function () {
    return view('profil', ['prodil' => 'Teknik Informatika']);
});


Route::get('/prodi', [ProdiController::class, 'show']);

Route::get('/list', [bookController::class, 'index']);

Route::get('/kelurahan', [KelurahanController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);

Route::get(
    'books/create',
    [BookController::class, 'create'] 
);

Route::post(
    'books/store',
    [BookController::class, 'store']
);
