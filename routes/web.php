<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\KategoriBukuController;

Route::get('/hai', function () {
    return view('welcome');
});
Route::get('/hai',[HaiController::class,'index']);
Route::get('/kategori-buku', [KategoriBukuController::class,'index']);
Route::get('/kategori-buku.tambah',[KategoriBukuController::class,'create']);
Route::post('/kategori-buku.data',[KategoriBukuController::class,'store']);