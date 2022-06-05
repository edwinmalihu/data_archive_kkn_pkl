<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KknController;
use App\Http\Controllers\PklController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\RegisAdminController;



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


//landingpage
Route::get('/', [PageController::class, 'index']);
Route::get('/daftar-laporan', [PageController::class, 'daftar_laporan']);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/register', [RegistrasiController::class, 'store']);
Route::get('/forgot', [RegistrasiController::class, 'forgotPass']);
Route::post('/create_forgot_password', [RegistrasiController::class, 'create_referral_forgot_password'])->name("create_forgot_password");
Route::get('/reset', [RegistrasiController::class, 'reset']);
Route::post('/reset_password', [RegistrasiController::class, 'reset_password'])->name('reset_password');

// register admin
Route::get('/registeradmin', [RegisAdminController::class, 'index'])->middleware('guest');
Route::post('/registeradmin', [RegisAdminController::class, 'store']);
// Route::get('/forgot', [RegisAdminController::class, 'forgotPass']);
// Route::post('/create_forgot_password', [RegisAdminController::class, 'create_referral_forgot_password'])->name("create_forgot_password");
// Route::get('/reset', [RegisAdminController::class, 'reset']);
// Route::post('/reset_password', [RegisAdminController::class, 'reset_password'])->name('reset_password');


//admin fitur user
Route::get('/dashboard/daftar-user', [adminController::class, 'daftar_user'])->middleware('auth');
Route::delete('/dashboard/daftar-user/{id}', [adminController::class, 'delete_user']);
Route::get('/dashboard/{id}/edit', [adminController::class, 'edit']);
Route::patch('/dashboard/daftar-user', [adminController::class, 'verify']);

//Create Dosen
Route::get('/dashboard/tambah-dosen', [adminController::class, 'createDosen'])->middleware('auth');
Route::get('/dashboard/lihat-dosen', [adminController::class, 'listDosen'])->middleware('auth');
Route::post('/dashboard/addDosen', [adminController::class, 'addDosen']);
Route::delete('/dashboard/delete-dosen/{id}', [adminController::class, 'delete_dosen']);
Route::get('/dashboard/edit-dosen/{id}', [adminController::class, 'view_edit_dosen'])->middleware('auth');
Route::patch('/dashboard/update-dosen/{id}', [adminController::class, 'edit_dosen']);

//export pdf
Route::get('/dashboard/exportPdf', [adminController::class, 'exportPdf']);
Route::get('/dashboard/exportKkn', [adminController::class, 'exportKkn']);


//kkn
Route::get('/dashboard/kkn', [KknController::class, 'index'])->middleware('auth');
Route::post('/dashboard/kkn', [KknController::class, 'store']);
Route::get('/dashboard/edit/{id_kkn}', [KknController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/edit/{id_kkn}', [KknController::class, 'update']);
Route::delete('/dashboard/{id_kkn}', [KknController::class, 'destroy']);

//pkl
Route::get('/dashboard/pkl', [PklController::class, 'index'])->middleware('auth');
// Route::post('/dashboard/pkl', [PklController::class, 'store']);
Route::post('/dashboard/addpkl', [PklController::class, 'addpkl']);
// Route::get('/dashboard/{id_pkl}', [DashboardController::class, 'edit'])->middleware('auth');
Route::get('/dashboard/{id_pkl}', [PklController::class, 'edit'])->middleware('auth');
// Route::put('/dashboard/{id_pkl}', [DashboardController::class, 'update']);
Route::patch('/dashboard/edit/{id_pkl}', [PklController::class, 'update']);
Route::delete('/dashboard/d/{id_pkl}', [PklController::class, 'destroy']);

//halaman home dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// HALAMAN TAMBAHAN (Halaman Tambah Dosen)



// HALAMAN tambahdosen
// Route::get('/tambahdosen', []);
