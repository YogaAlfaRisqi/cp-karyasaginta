<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('landingpage');
Route::get('produk', [ProdukController::class, 'index'])->name('produk');
Route::get('tentangkami', [TentangController::class, 'index'])->name('tentangkami');
Route::get('layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('pengalaman', [PengalamanController::class, 'index'])->name('pengalaman');
Route::get('/experiences/{slug}', [PengalamanController::class, 'show'])->name('experiences.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
