<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\suratmasukcontroller;
use App\Http\Controllers\suratkeluarcontroller;

Route::get('/', function () {
return view('dashboar');
})->name('dashboar');

// //ROUTER DASAR
// route :: get('/surat-masuk', function () {
//     return 'halaman surat masuk';
// })->name('surat-masuk.show');

// //ROUTER DASAR DENGAN PARAMETER
// route :: get('/surat-masuk/{id}', function ($id) {
//     return 'surat masuk dengan id:' .$id;
// })->name('surat-masuk.show');


//route controller
Route::get('/surat-masuk', [suratmasukcontroller::class, 'index'])->name('surat-masuk.index');


Route::get('/surat-masuk/{id}', [suratmasukcontroller::class, 'show'])->name('surat-masuk.show');

Route::get('/surat-keluar', [suratkeluarcontroller::class, 'index'])
    ->name('surat-keluar.index');

Route::get('/surat-keluar/{id}', [suratkeluarcontroller::class, 'show'])
    ->name('surat-keluar.show');