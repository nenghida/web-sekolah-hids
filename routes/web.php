<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\GuruController;


Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/galeri', [GaleryController::class, 'index'])
    ->name('galeri');

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan');

Route::get('/ekstrakurikuler', [EkstrakulikulerController::class, 'index'])
    ->name('esktrakurikuler');

    Route::get('/profil', [HomeController::class, 'profil'])
    ->name('profil');

     Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru');

