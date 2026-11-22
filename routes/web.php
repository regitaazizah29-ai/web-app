<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Web;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

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
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// Route WebController
Route::get('/web', [Web::class, 'home']);
Route::get('/profil', [Web::class, 'profil']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/biodata', [Web::class, 'biodata']);

// Route DashboardController
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/about', [DashboardController::class, 'about']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);

// Route KalkulatorController
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

// Route MahasiswaController
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/employe', [EmployeController::class, 'index']);