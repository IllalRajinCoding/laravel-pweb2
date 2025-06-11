<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman about
Route::get('/about', function () {
    return view('about');
});

// Salam dengan parameter
Route::get('/salam/{name}', function ($name) {
    return "Selamat datang $name";
});  

// Produk
Route::get('produk', function () {
    return view('produk/index');
});
Route::get('produk/{id}', function ($id) {
    return view('produk/index', ['idproduk' => $id]);
});

// Profil
Route::get('/profil', function () {
    return view('profil', ['prodil' => 'Teknik Informatika']);
});

// Prodi
Route::get('/prodi', [ProdiController::class, 'show']);

// Buku
Route::get('books/create', [BookController::class, 'create']);
Route::post('books/store', [BookController::class, 'store']);
Route::get('books/{id}', [BookController::class, 'edit']);
Route::put('books/update/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

// Kelurahan & Pasien
Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/pasien', [PasienController::class, 'index']);

// Admin
Route::get('/admin', [Admincontroller::class, 'index']);

// Dashboard & Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', function () {
    return view('template');
    })->name('admin');
    Route::get('/list', [BookController::class, 'index'])->name('list'); // Tambahkan baris ini
});
use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);
require __DIR__.'/auth.php';