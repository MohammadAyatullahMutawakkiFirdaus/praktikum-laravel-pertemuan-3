<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\suratmasukcontroller;
use App\Http\Controllers\suratkeluarcontroller;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', fn () => view('dashboard'))->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Surat Masuk
    Route::resource('surat-masuk', suratmasukcontroller::class)
        ->only(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);

    Route::resource('surat-masuk', suratmasukcontroller::class)
        ->except(['index', 'show'])
        ->parameters(['surat-masuk' => 'id'])
        ->middleware('can:manage-letters');

    // Surat Keluar (latihan mandiri, pola sama)
    Route::resource('surat-keluar', suratkeluarcontroller::class)
        ->only(['index', 'show'])
        ->parameters(['surat-keluar' => 'id']);

    Route::resource('surat-keluar', suratkeluarcontroller::class)
        ->except(['index', 'show'])
        ->parameters(['surat-keluar' => 'id'])
        ->middleware('can:manage-letters');
});

// //ROUTER DASAR
// route :: get('/surat-masuk', function () {
//     return 'halaman surat masuk';
// })->name('surat-masuk.show');

// //ROUTER DASAR DENGAN PARAMETER
// route :: get('/surat-masuk/{id}', function ($id) {
//     return 'surat masuk dengan id:' .$id;
// })->name('surat-masuk.show');


//route controller
//Route::get('/surat-masuk', [suratmasukcontroller::class, 'index'])->name('surat-masuk.index');


//Route::get('/surat-masuk/{id}', [suratmasukcontroller::class, 'show'])->name('surat-masuk.show');

//Route::get('/surat-keluar', [suratkeluarcontroller::class, 'index'])
//    ->name('surat-keluar.index');

//Route::get('/surat-keluar/{id}', [suratkeluarcontroller::class, 'show'])
  //  ->name('surat-keluar.show');