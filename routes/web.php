<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PemesananController;

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
Route::post('/login/proses', [LoginController::class, 'proses']);



//module tiket
Route::get('/tiket', [TicketController::class, 'index']);
Route::get('/createtiket', [TicketController::class, 'create']);
Route::post('/createtiket', [TicketController::class, 'process'])->name('add-ticket');
Route::get('/delete-ticket/{kd}', [TicketController::class, 'delete']);

Route::get('/edit-ticket/{kd}', [TicketController::class, 'view_edit']);
Route::post('/edit-ticket/{kd}', [TicketController::class, 'update']);

//module data pemesanan tiket
Route::get('/dtpemesanantiket', [PemesananController::class, 'index']);

//module petugas
Route::get('/petugas', function() {

    return view('modules.petugas.datapetugas');
});




Route::get('pw', function() {

    echo Hash::make("123");
});