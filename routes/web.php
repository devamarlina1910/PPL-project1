<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route ::get('dashboard', [App\Http\Controllers\landingPageController::class,'index']);use App\Http\Controllers\BimbinganController;

Route::get('/bimbingan', [BimbinganController::class, 'index'])->name('bimbingan.index');
Route::get('/bimbingan/create', [BimbinganController::class, 'create'])->name('bimbingan.create');
Route::post('/bimbingan', [BimbinganController::class, 'store'])->name('bimbingan.store');