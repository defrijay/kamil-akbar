<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\MotorController;

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


Route::get('/', function () {
    return view('landing-page', [
        "title" => "Home"
    ]);
});



Route::get('/form', function () {
    return view('form', [
        "title" => "Form"
    ]);
});
Route::get('/welcome', function () {
    return view('welcome', [
        "title" => "Form"
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Admin"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "Daftar Customers"
    ]);
});

Route::get('/login', function () {
    return view('/admin/login', [
        "title" => "Login Customers"
    ]);
});

Route::get('/loginAdmin', function () {
    return view('loginAdmin', [
        "title" => "Login Admin"
    ]);
});

Route::get('/paket', function () {
    return view('paket', [
        "title" => "Paket Servis"
    ]);
});

// CONTACT
Route::get('/kontak', [PesanController::class, 'index']);
Route::post('/pesan/savepesan', [PesanController::class, 'store']);
Route::get('/pesan/{id}/editpesan', [PesanController::class, 'edit']);
Route::put('/pesan/{id}', [PesanController::class, 'update']);
Route::delete('/pesan/{id}', [PesanController::class, 'destroy']);

// ADMIN
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/data', [AdminController::class, 'data']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::post('/admin/store', [AdminController::class, 'store']);

// CRUD PELANGGAN
Route::get('/pelanggan/{id}/editpelanggan', [PelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy']);

// CRUD MOTOR
Route::get('/motor/{id}/editmotor', [MotorController::class, 'edit']);
Route::put('/motor/{id}', [MotorController::class, 'update']);
Route::delete('/motor/{id}', [MotorController::class, 'destroy']);

// CRUD PAKET
Route::get('/paket', [PaketController::class, 'index']);
Route::get('/paket/addpaket', [PaketController::class, 'create']);
Route::post('/paket/savepaket', [PaketController::class, 'store']);
Route::get('/paket/{id}/editpaket', [PaketController::class, 'edit']);
Route::put('/paket/{id}', [PaketController::class, 'update']);
Route::delete('/paket/{id}', [PaketController::class, 'destroy']);

// CRUD PEMESANAN
Route::get('/pemesanan/{id}/editpemesanan', [PemesananController::class, 'edit']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);