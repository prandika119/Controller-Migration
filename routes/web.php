<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
