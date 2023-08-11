<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/pendaftaran', [PageController::class, 'register'])->name('register');
Route::post('/pendaftaran', [PageController::class, 'StoreRegister'])->name('register');
Route::get('/login/pkbm-winaya-bakti/signin', [PageController::class, 'sign_admin'])->name('sign.admin');
Route::get('/login/pkbm-winaya-bakti/logout', [PageController::class, 'logout'])->name('logout.admin');
Route::post('/login/pkbm-winaya-bakti/signin', [PageController::class, 'sign_admin_post'])->name('sign.admin.post');

Route::resource('/admins/pkbm-winaya-bakti', AdminController::class)->middleware(['auth:admin']);
Route::get('/admins/pkbm-winaya-bakti/download-image/{nomor}/{filename}/{jenis}', [AdminController::class, 'downloadImage'])->name('download.image')->middleware(['auth:admin']);
Route::post('/admins/pkbm-winaya-bakti/detail-siswa', [AdminController::class, 'detail_siswa'])->name('detail.siswa')->middleware(['auth:admin']);


