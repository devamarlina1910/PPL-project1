<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BimbinganController;

Route::get('dashboard', [App\Http\Controllers\landingPageController::class,'index']);

Route::get('/bimbingan', [BimbinganController::class, 'index'])->name('bimbingan.index');
Route::get('/bimbingan/create', [BimbinganController::class, 'create'])->name('bimbingan.create');
Route::post('/bimbingan', [BimbinganController::class, 'store'])->name('bimbingan.store');
Route::get('/bimbingan/{id}/edit', [BimbinganController::class, 'edit'])->name('bimbingan.edit');
Route::put('/bimbingan/{id}', [BimbinganController::class, 'update'])->name('bimbingan.update');
Route::delete('/bimbingan/{id}', [BimbinganController::class, 'destroy'])->name('bimbingan.destroy');