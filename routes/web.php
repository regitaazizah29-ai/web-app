 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;

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

// route baru
Route::get('/about', function () {
    return "<h2>Ini adalah laman About</h2>";
});

// route ke controller Web ke fungsi home
Route::get('/web', [Web::class, 'home']);

// route ke controller Web ke fungsi profil biasa
Route::get('/profil', [Web::class, 'profil']);

//route ke controller Web ke fungsi profil 
Route::get('/profil/{nama}',[Web::class, 'profil']);

use App\Http\Controllers\DashboardController;

// Home
route::get('/home', [DashboardController::class, 'home']);

// Product
route::get('/product', [DashboardController::class, 'product']);

// About
route::get('/about', [DashboardController::class, 'about']);

// Detail Product dengan URL parameter {harga}
route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

//route untuk membuka Controller web fungsi biodata
Route::get('/biodata',[Web::class, 'biodata']);

//import Controller Kalkulator diatas
use App\Http\Controllers\KalkulatorController;

//route ke controller kalkulator
Route::get('/kalkulator',[KalkulatorController::class, 'home']);
//route untuk proses perhitungan
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

use App\Http\Controllers\MahasiswaController;

// Route untuk daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk kalkulator segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);