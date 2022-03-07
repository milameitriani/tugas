<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanduaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/data', [DataController::class, 'index'])->name('data');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman');
Route::get('/pinjaman/detail/{id_pinjaman}', [PinjamanController::class, 'detail']);
Route::get('/pinjaman/add', [PinjamanController::class, 'add']);
Route::post('/pinjaman/insert', [PinjamanController::class, 'insert']);
Route::get('/pinjaman/edit/{id_pinjaman}', [PinjamanController::class, 'edit']);
Route::post('/pinjaman/update/{id_pinjaman}', [PinjamanController::class, 'update']);
Route::get('/pinjaman/delete/{id_pinjaman}', [PinjamanController::class, 'delete']);
Route::get('/simpanan', [SimpananController::class, 'index'])->name('simpanan');
Route::get('/simpanan/detail/{id_simpanan}', [SimpananController::class, 'detail']);
Route::get('/simpanan/add', [SimpananController::class, 'add']);
Route::post('/simpanan/insert', [SimpananController::class, 'insert']);
Route::get('/simpanan/edit/{id_simpanan}', [SimpananController::class, 'edit']);
Route::post('/simpanan/update/{id_simpanan}', [SimpananController::class, 'update']);
Route::get('/simpanan/delete/{id_simpanan}', [SimpananController::class, 'delete']);
Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah');
Route::get('/nasabah/detail/{id_nasabah}', [NasabahController::class, 'detail']);
Route::get('/nasabah/add', [NasabahController::class, 'add']);
Route::post('/nasabah/insert', [NasabahController::class, 'insert']);
Route::get('/nasabah/edit/{id_nasabah}', [NasabahController::class, 'edit']);
Route::post('/nasabah/update/{id_nasabah}', [NasabahController::class, 'update']);
Route::get('/nasabah/delete/{id_nasabah}', [NasabahController::class, 'delete']);
Route::get('/angsuran', [AngsuranController::class, 'index'])->name('angsuran');
Route::get('/angsuran/detail/{id_angsuran}', [AngsuranController::class, 'detail']);
Route::get('/angsuran/add', [AngsuranController::class, 'add']);
Route::post('/angsuran/insert', [AngsuranController::class, 'insert']);
Route::get('/angsuran/edit/{id_angsuran}', [AngsuranController::class, 'edit']);
Route::post('/angsuran/update/{id_angsuran}', [AngsuranController::class, 'update']);
Route::get('/angsuran/delete/{id_angsuran}', [AngsuranController::class, 'delete']);
Route::get('/penarikan', [PenarikanController::class, 'index'])->name('penarikan');
Route::get('/penarikan/detail/{id_penarikan}', [PenarikanController::class, 'detail']);
Route::get('/penarikan/add', [PenarikanController::class, 'add']);
Route::post('/penarikan/insert', [PenarikanController::class, 'insert']);
Route::get('/penarikan/edit/{id_penarikan}', [PenarikanController::class, 'edit']);
Route::post('/penarikan/update/{id_penarikan}', [PenarikanController::class, 'update']);
Route::get('/penarikan/delete/{id_penarikan}', [PenarikanController::class, 'delete']);
Route::get('/latihan', [PengenalanController::class, 'index'])->name('latihan');
Route::get('/latihandua', [LatihanduaController::class, 'index'])->name('latihandua');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');