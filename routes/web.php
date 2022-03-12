<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;

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









Route::get('/tiket', [TicketController::class, 'index']);

Route::get('/createtiket', function() {

    return view('modules.tiket.createtiket');
});