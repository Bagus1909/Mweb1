<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardMobilController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\TesController;
use App\Models\Mobil;
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
    return view('index', [
        "title" => "Home",
        'mobils' =>Mobil::all()
    ]);
});
// Route::get('/', [IndexController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/promo', function(){
    return view('promo.index', [
        'title' => 'Promo'
    ]);
});
Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/simulasi', [SimulasiController::class, 'index']);
Route::post('/getTipe', [SimulasiController::class, 'getTipe']);
Route::post('/getTransmisi', [SimulasiController::class, 'getTransmisi']);
Route::post('/getHarga', [SimulasiController::class, 'getHarga']);
Route::post('/hasil', [SimulasiController::class, 'hitung']);

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::post('/pemesanan', [PemesananController::class, 'send']);

Route::get('/tes', [TesController::class,'index']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Route::resource('/dashboard/produk/', CarController::class);

Route::middleware(['auth'])->group(function(){
    Route::resource('/dashboard/mobil', DashboardMobilController::class);
    Route::resource('/dashboard/produk', DashboardProdukController::class);
    // Route::get('/dashboard/produk', [DashboardProdukController::class, 'index']);
    // Route::get('/dashboard/produk/create', [DashboardProdukController::class, 'create']);
    // Route::post('/dashboard/produk/store', [DashboardProdukController::class, 'store']);
    // Route::get('/dashboard/produk/{produk}/edit', [DashboardProdukController::class, 'edit']);
    // Route::put('/dashboard/produk/{produk}', [DashboardProdukController::class, 'update']);
    // Route::delete('/dashboard/produk/{produk}', [DashboardProdukController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
