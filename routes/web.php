<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;
use Doctrine\DBAL\Driver\Middleware;

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
    })->middleware('auth');

Route::get('/data', [EmployeController::class, 'index'])->name('data')->middleware('auth');

Route::get('/tambahdata', [EmployeController::class, 'tambahdata'])->name('tambahdata')->middleware('auth');
Route::post('/insertdata',[EmployeController::class, 'insertdata'])->name('insertdata')->middleware('auth');

Route::get('/tampilkandata/{id}',[EmployeController::class, 'tampilkandata'])->name('tampilkandata')->middleware('auth');
Route::post('/updatedata/{id}',[EmployeController::class, 'updatedata'])->name('updatedata')->middleware('auth');


Route::get('/mobil', [MobilController::class, 'mobil'])->name('mobil')->middleware('auth');

Route::get('/tambahmobil', [MobilController::class, 'tambahmobil'])->name('tambahmobil')->middleware('auth');
Route::post('/insertmobil',[MobilController::class, 'insertmobil'])->name('insertmobil')->middleware('auth');

Route::get('/tampilkanmobil/{id}',[MobilController::class, 'tampilkanmobil'])->name('tampilkanmobil')->middleware('auth');
Route::post('/updatemobil/{id}',[MobilController::class, 'updatemobil'])->name('updatemobil')->middleware('auth');

Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi')->middleware('auth');

Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi'])->name('tambahtransaksi')->middleware('auth');
Route::post('/inserttransaksi',[TransaksiController::class, 'inserttransaksi'])->name('inserttransaksi')->middleware('auth');

Route::get('/tampilkantransaksi/{id}',[TransaksiController::class, 'tampilkantransaksi'])->name('tampilkantransaksi')->middleware('auth');
Route::post('/updatetransaksi/{id}',[TransaksiController::class, 'updatetransaksi'])->name('updatetransaksi')->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/proses', [LoginController::class, 'proses'])->name('proses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');