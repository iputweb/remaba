<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DasbodController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\RemabaController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::controller(GaleriController::class)->group(function() {
    Route::get('/galeri', 'index');
    Route::get('/galeri/tambah', 'add');
    Route::POST('/galeri/simpan', 'save');
    Route::get('/galeri/edit/{id}', 'edit');
    Route::delete('/galeri/hapus/{id_galeri}', 'hapus');
});
Route::controller(AnggotaController::class)->group(function() {
    Route::get('/anggota', 'index');
    Route::get('/anggota/tambah', 'add');
    Route::POST('/anggota/simpan', 'save');
    Route::get('/anggota/edit/{id}', 'edit');
    Route::delete('/anggota/hapus/{id_anggota}', 'hapus');
});

Route::get('/beranda', [BerandaController::class,'index']);
Route::get('/dasbod', [DasbodController::class,'index']);
Route::get('/remaba', [RemabaController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'], function(){
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/', function () {
    return view('admin.v_admin');
});