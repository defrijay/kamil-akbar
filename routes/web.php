<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;

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

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Admin"
    ]);
});

Route::get('/kontak', function () {
    return view('contact', [
        "title" => "Kontak"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "Daftar Customers"
    ]);
});

Route::get('/login', function () {
    return view('login', [
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
