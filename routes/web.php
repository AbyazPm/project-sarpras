<?php

use Illuminate\Support\Facades\Route;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

   use App\Http\Controllers\DashboardController;
   use App\Http\Controllers\SiswaController;
   use App\Http\Controllers\SarprasController;
   use App\Http\Controllers\PeminjamanController;
   use App\Http\Controllers\PengembalianController;
   use App\Http\Controllers\LaporanController;
   use App\Http\Controllers\LoginController;
   
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
    return view('login');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest')->name('login.post');

Route::get('/admin', function () {
    return view('admin.app');
});

Route::middleware(['ga'])->group(function (){

    Route::resource('/siswa', SiswaController::class);
    Route::resource('/sarpras', SarprasController::class);
    Route::resource('/peminjaman', PeminjamanController::class);
    Route::resource('/laporan', LaporanController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
});

Route::middleware(['ja'])->group(function (){

    Route::resource('/pengembalian', PengembalianController::class);

});
// Route::middleware(['auth'])->group(function (){


// });

Route::middleware(['ga'])->group(function (){

    Route::resource('/dashboard', DashboardController::class);

});
