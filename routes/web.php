<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Login & Proses Auth
Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'cek']);

// Route WebController
Route::get('/web', [Web::class, 'home']);
Route::get('/profil', [Web::class, 'profil']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/biodata', [Web::class, 'biodata']);

// Route KalkulatorController & MahasiswaController
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Route yang wajib login (middleware islogin)
Route::group(['middleware' => 'islogin'], function () {
    // Dashboard & Halaman Umum
    Route::get('/home', [DashboardController::class, 'home']);
    Route::get('/product', [DashboardController::class, 'product']);
    Route::get('/about', [DashboardController::class, 'about']);
    Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);

    // CRUD Employe
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/tambah', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/edit/{id}', [EmployeController::class, 'edit']);
    Route::put('/employe/update/{id}', [EmployeController::class, 'update']);
    Route::delete('/employe/delete/{id}', [EmployeController::class, 'destroy']);

    // CRUD Admin
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/tambah', [AdminController::class, 'create']);
    Route::post('/admin/store', [AdminController::class, 'store']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::put('/admin/update/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);

    // Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});