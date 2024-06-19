<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AuthController;
use App\http\controllers\HomeController;
use App\http\controllers\contentController;
use App\http\controllers\profilController;
use App\http\controllers\bukuController;
use App\http\controllers\ServiceController;
use App\http\controllers\DataController;
use App\Http\Controllers\KecelakaanController;

/*Route::get('/', function () {
    return view('welcome');
})-> middleware('auth');*/

Route::get('/', function () {
    return view('layouts/home');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
/*Route::get('login', [AuthController::class, 'authenticating']); */
Route::get('home', [HomeController::class, 'home']);
Route::get('content', [contentController::class, 'content']);
Route::get('profil', [profilController::class, 'profil']);
Route::get('buku', [bukuController::class, 'buku']);
Route::get('service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::resource('/data', DataController::class);
Route::resource('kecelakaan', KecelakaanController::class);
