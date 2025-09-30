<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\TagController;

Route::get('/hai', function () {
    return view('welcome');
});
Route::get('/hai',[HaiController::class,'index']);
Route::get('/kategori-buku', [KategoriBukuController::class,'index']);
Route::get('/kategori-buku.tambah',[KategoriBukuController::class,'create']);
Route::post('/kategori-buku.data',[KategoriBukuController::class,'store']);
Route::get('/penerbit',[PenerbitController::class,'index']);
Route::get('/penerbit.create',[PenerbitController::class,'create']);
Route::post('/penerbit',[PenerbitController::class,'Store']);
Route::get('/penerbit.{id}.edit',[PenerbitController::class,'edit']);
Route::put('/penerbit.{id}',[PenerbitController::class,'update']);
Route::delete('/penerbit.{id}',[PenerbitController::class,'destroy']);
Route::get('/tag', [TagController::class,'index']);