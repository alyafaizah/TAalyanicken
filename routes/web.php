<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\LaporanController;

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

Route::get('/dashboard',[DashboardController::class, 'dashboard']);
Route::get('/ujicoba/{nama}', [DashboardController::class, 'dinamisroute']);


Route::get('/template', function() {

    return view('layouts.template-backend');
});

Route::get('/pengujian', function() {

    return view('modules.dashboard.index');
});


// module login
Route::get('/login', [LoginController::class, 'index']);
Route::get('/login/proses', [LoginController::class, 'proses']);



//module tiket
Route::get('/tiket', [TicketController::class, 'index']);
Route::get('/createtiket', [TicketController::class, 'create']);
Route::post('/createtiket', [TicketController::class, 'process'])->name('add-ticket');
Route::get('/delete-ticket/{kd}', [TicketController::class, 'delete']);

Route::get('/edit-ticket/{kd}', [TicketController::class, 'view_edit']);
Route::post('/edit-ticket/{kd}', [TicketController::class, 'update']);

//module data pemesanan tiket
Route::get('/dtpemesanantiket', [PemesananController::class, 'index']);
Route::get('/edit-dtpemesanan/{kd}', [PemesananController::class, 'view_edit']);
Route::post('/edit-dtpemesanan/{kd}', [PemesananController::class, 'update']);
Route::get('/delete-dtpemesanan/{kd}', [PemesananController::class, 'delete']);

//laporan
Route::get('/laporan', [LaporanController::class, 'index']);




/**
 * 
 *  Pemesanan Baru 
 * 
 */

Route::get('petugas/order', [PemesananController::class, 'form_orderoffline']);
Route::get('petugas/payment', [PemesananController::class, 'form_orderoffline_pembayaran']);

// proses pemesanan
Route::post('proses-pemesanan', [PemesananController::class, 'proses_pemesanan']);
Route::get('transaction-success/{kd_order}', [PemesananController::class, 'pemesanan_berhasil']);



//module petugas
Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/createpetugas', [PetugasController::class, 'create']);
Route::post('/createpetugas', [PetugasController::class, 'process'])->name('add-petugas');
Route::get('/delete-petugas/{kd}', [PetugasController::class, 'delete']);
Route::get('/edit-petugas/{kd}', [PetugasController::class, 'view_edit']);
Route::post('/edit-petugas/{kd}', [PetugasController::class, 'update']);


Route::get('/riwayat', function() {

    return view('modules.riwayat.riwayattransaksi');
});

/**
 * 
 * 
 *  Pengunjung
 * 
 */

//regis
Route::post('/register/proses', [LoginController::class, 'prosesregis']);

// profile
Route::get('/dashboardcust', [ProfileController::class, 'dashboardcust']);
Route::get('/informasipribadi', [ProfileController::class, 'index']);
Route::get('/ubahkatasandi', [ProfileController::class, 'ubahkatasandi']);
Route::resource('/updatepass','ProfileController');
Route::get('/editinformasipribadi/{kd}', [ProfileController::class, 'view_edit']);
Route::post('/editinformasipribadi/{kd}', [ProfileController::class, 'update']);

// purchase pengunjung
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/struk', [CheckoutController::class, 'struk']);

//riwayat 
Route::get('/riwayattransaksi', [RiwayatController::class, 'riwayattransaksi']);
Route::get('/riwayatpembayaran', [RiwayatController::class, 'riwayatpembayaran']);

Route::get('pw', function() {

    echo Hash::make("123");
});