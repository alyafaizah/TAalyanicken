<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PasswordUpdate;
use App\Http\Controllers\DiskonController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmailController;

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
// Qr-Code
Route::get('/qrcode', [CheckoutController::class, 'qrcode']);

// Route::get('/', function () {
//     return view('modules.landingpage.landingpage2');
// });

Route::get('/', [LandingPage::class, 'index']);




// module login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login/proses', [LoginController::class, 'proses']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/forgotpass', [EmailController::class, 'forgotpass']);
Route::get('/markdown', [EmailController::class, 'markdown']);
Route::get('/aturulangpassword', [ProfileController::class, 'view_ubahpassword']);
Route::post('/updatenewpassword', [ProfileController::class, 'proses_ubahpassword']);

//email
Route::get('/email', [EmailController::class, 'index']);

//landing page
// Route::get('/landingpage2', function () {

//     return view('modules.landingpage.landingpage2');
// });



/**
 *
 *  Pemesanan Baru
 *
 */



/**
 *
 *
 *  Pengunjung
 *
 */
//regis (pengunjung)
Route::get('/register/proses', [LoginController::class, 'prosesregis']);


// Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);


Route::group(['middleware' => 'usersession'], function () {

    //diskon
    Route::get('/diskon', [DiskonController::class, 'index'])->name('view-diskon');
    Route::get('/creatediskon', [DiskonController::class, 'create']);
    Route::post('/creatediskon', [DiskonController::class, 'process'])->name('add-diskon');
    Route::get('/editdiskon/{kd}', [DiskonController::class, 'view_edit']);
    Route::post('/editdiskon/{kd}', [DiskonController::class, 'update']);
    Route::get('/deletediskon/{kd}', [DiskonController::class, 'delete']);

    //modules tiket (admin)
    Route::get('/tiket', [TicketController::class, 'index'])->name('view-ticket');
    Route::get('/createtiket', [TicketController::class, 'create']);
    Route::post('/createtiket', [TicketController::class, 'process'])->name('add-ticket');
    Route::get('/delete-ticket/{kd}', [TicketController::class, 'delete']);

    Route::get('/edit-ticket/{kd}', [TicketController::class, 'view_edit']);
    Route::post('/edit-ticket/{kd}', [TicketController::class, 'update']);

    // modules laporan (admin)
    Route::get('/laporan', [LaporanController::class, 'index']);

    Route::get('/laporanoffline',  [LaporanController::class, 'laporanoffline']);
    Route::get('/laporanoffline/periode', [LaporanController::class, 'periodeoffline']);
    Route::get('/cetakpdfoffline',  [LaporanController::class, 'cetakpdflaporanoffline']);

    Route::get('/laporanonline',  [LaporanController::class, 'laporanonline']);
    // Route::get('/laporanonline/periode', [LaporanController::class, 'periode']);
    Route::get('/cetakpdfonline',  [LaporanController::class, 'cetakpdflaporanonline']);

    Route::get('/download',  [ProfileController::class, 'savepdf']);

    //modules dashboard (petugas)
    Route::get('/dashboardpetugas', [DashboardController::class, 'dashboardpetugas']);
    Route::get('/check-qr', [DashboardController::class, 'checkQR']);
    // cek secara konvensional
    Route::get('/manual-check', [DashboardController::class, 'manualCheckCode']);

    //modules transaksi pemesanan offline (petugas)
    Route::get('petugas/order', [PemesananController::class, 'form_orderoffline'])->name('view-order');
    Route::get('petugas/payment', [PemesananController::class, 'form_orderoffline_pembayaran']);

    // proses pemesanan tiket online (pengunjung)
    Route::post('proses-pemesanan', [PemesananController::class, 'proses_pemesanan']);
    Route::get('transaction-success/{order_id}', [PemesananController::class, 'pemesanan_berhasil']);

    //modules data petugas (admin)
    Route::get('/petugas', [PetugasController::class, 'index'])->name('view-petugas');
    Route::get('/createpetugas', [PetugasController::class, 'create']);
    Route::post('/createpetugas', [PetugasController::class, 'process'])->name('add-petugas');
    Route::get('/delete-petugas/{kd}', [PetugasController::class, 'delete']);
    Route::get('/edit-petugas/{kd}', [PetugasController::class, 'view_edit']);
    Route::post('/edit-petugas/{kd}', [PetugasController::class, 'update']);


    // profile (pengunjung)
    Route::get('/dashboardcust', [ProfileController::class, 'dashboardcust']);
    Route::get('/informasipribadi', [ProfileController::class, 'index']);
    Route::get('/ubahkatasandi', [ProfileController::class, 'ubahkatasandi']);
    // Route::resource('/updatepass', 'ProfileController');
    Route::post('/updatepass/{id}', [PasswordUpdate::class, 'update']);
    Route::get('/editinformasipribadi/{kd}', [ProfileController::class, 'view_edit']);
    Route::post('/editinformasipribadi', [ProfileController::class, 'update']);

    //purchase pengunjung atau pemesanan tiket online (pengunjung)
    Route::get('/checkout', [CheckoutController::class, 'checkout']);
    Route::get('/create-snap', [CheckoutController::class, 'createSnap']);
    Route::get('/request-date', [CheckoutController::class, 'request_date']);
    Route::get('/check-radeem-coupon', [CheckoutController::class, 'check_coupon']);
    Route::get('checkout-success/{kd_order}', [CheckoutController::class, 'pemesanan_berhasil']);


    Route::post('/pengunjung/proses-pemesanan', [CheckoutController::class, 'proses_pemesanan']);

    Route::get('/struk', [CheckoutController::class, 'struk']);

    //riwayat all level
    // Route::get('/riwayat', function () {

    //     return view('modules.riwayat.riwayattransaksi');
    // });
    Route::get('/riwayattransaksi', [RiwayatController::class, 'riwayattransaksi']);
    Route::get('/detailriwayat/{order_id}', [RiwayatController::class, 'riwayatById']);
    Route::get('/riwayatpembayaran', [RiwayatController::class, 'riwayatpembayaran']);
    Route::get('/riwayatadmin', [RiwayatController::class, 'riwayatadmin']);
    Route::get('/riwayatpetugas', [RiwayatController::class, 'riwayatpetugas']);


    Route::get('/dashboard', [DashboardController::class, 'dashboard']);


    Route::get('dummy', [RiwayatController::class, 'payment']);







    // scanner
    // Route::get('/scanner', [DashboardController::class, 'scan']);

});

Route::get('/download',  [ProfileController::class, 'savepdf']);

Route::get('pw', function () {

    // echo Hash::make("456");
});

Route::get('/test',  [LaporanController::class, 'test']);

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
