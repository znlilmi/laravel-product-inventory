<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;

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

// Resource Routes
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('units', UnitController::class);

// User-related Routes
Route::get('dashboard', [UserController::class, 'dashboard']); // Tidak ada perubahan, sesuai permintaan
// Rute 'users' yang duplikat dihapus, mempertahankan yang memiliki nama
Route::get('users', [UserController::class, 'users'])->name('users.index'); //
Route::get('register', [UserController::class, 'index']); //

// Rute untuk fungsionalitas cetak PDF dan export Excel
Route::get('printpdf', [UserController::class, 'printPDF'])->name('printuser'); //
Route::get('printexcel', [UserController::class, 'userExcel'])->name('exportuser'); //
Route::get('printcategorypdf', [CategoryController::class, 'printPdf'])->name('printcategory');
Route::get('printproductpdf', [ProductController::class, 'printPdf'])->name('printproduct');