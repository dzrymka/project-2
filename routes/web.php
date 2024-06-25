<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RelawanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect()->route('blood.index');
// });

Route::get('/admin', function () {
    return view('dashboard.index', [
        'title' => 'Sistem Informasi Manajemen PMI'
    ]);
});
// })->middleware('auth', 'role:admin');

// Route::get('/pegawai', function () {
//     return view('dashboard.indexpegawai', [
//         'title' => 'Sistem Informasi Manajemen PMI'
//     ]);
// })->middleware('auth', 'role:pegawai');


Route::get('/', function () {
    return view('theme');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'credentials'])->name('credentials');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
    Route::post('/register', [AuthController::class, 'store'])->name('store');
    Route::get('/forgotpassword', [AuthController::class, 'forgotpassword'])->name('forgotpassword')->middleware('guest');
    Route::post('/credentials', [AuthController::class, 'credentials'])->name('credentials');
});

Route::get('/profile', [ProfilController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfilController::class, 'update'])->name('profile.update');

// <!--------absensi----->
Route::get('absensi/generate-qrcode', [AbsensiController::class, 'showGenerateForm'])->name('absensi.generate-qrcode');
Route::post('absensi/generate-qrcode', [AbsensiController::class, 'generate'])->name('absensi.generate');
Route::get('absensi/scan', [AbsensiController::class, 'showScanForm'])->name('absensi.scan');
Route::get('absen/{id}', [AbsensiController::class, 'store'])->name('absensi.store');


Route::controller()->middleware(['check-role:admin']);

Route::resource('blood', BloodController::class);

Route::resource('donor', DonorController::class);

Route::resource('pegawai', PegawaiController::class);

Route::resource('relawan', RelawanController::class);

Route::resource('inventaris', InventarisController::class);

Route::resource('laporan', LaporanController::class);
