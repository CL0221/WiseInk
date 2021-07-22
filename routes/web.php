<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InkController;
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

Route::get('/', function () {
    return view('welcome');
});

/* Ink */
Route::get('inks', [InkController::class, 'index']);
Route::get('add-ink', [InkController::class, 'create']);
Route::post('add-ink', [InkController::class, 'store']);
Route::get('edit-ink/{id}', [InkController::class, 'edit']);
Route::put('update-ink/{id}', [InkController::class, 'update']);
Route::get('delete-ink/{id}', [InkController::class, 'destroy']);

/* Customer */
Route::get('customers', [CustomerController::class, 'index']);
Route::get('add-cus', [CustomerController::class, 'create']);
Route::post('add-cus', [CustomerController::class, 'store']);
Route::get('edit-cus/{id}', [CustomerController::class, 'edit']);
Route::put('update-cus/{id}', [CustomerController::class, 'update']);
Route::get('delete-cus/{id}', [CustomerController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
