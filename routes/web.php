<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD BARANG
use App\Http\Controllers\BarangController;
Route::resource('barang', BarangController::class);

//CRUD MERK
use App\Http\Controllers\MerkController;
Route::resource('merk', MerkController::class);

//CRUD KASIR
use App\Http\Controllers\KasirController;
Route::resource('kasir', KasirController::class);

//CRUD TRANSAKSI
use App\Http\Controllers\TransaksiController;
Route::resource('transaksi', TransaksiController::class);

