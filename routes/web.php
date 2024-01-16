<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\RuasJalanController;
use App\Http\Controllers\KecelakaanController;
use App\Http\Controllers\LokasiFlashingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('dashboard', [DashboardController::class, 'index']);
Route::resource('kendaraan',KendaraanController::class);
Route::get('kendaraan-hapus/{id}', [KendaraanController::class, 'destroy']);
Route::resource('kecelakaan',KecelakaanController::class);
Route::get('kecelakaan-hapus/{id}', [KecelakaanController::class, 'destroy']);
Route::resource('flashing',LokasiFlashingController::class);
Route::get('flashing-hapus/{id}', [LokasiFlashingController::class, 'destroy']);
Route::resource('ruas-jalan',RuasJalanController::class);
Route::get('ruas-jalan-hapus/{id}', [RuasJalanController::class, 'destroy']);

// Route::get('/tambah-kecelakaan', function () {
//     return view('master.kecelakaan.tambah-kecelakaan');
// });