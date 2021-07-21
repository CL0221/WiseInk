<?php

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

Route::get('ink', [\App\Http\Controllers\InkController::class, 'index'])->name('ink.ink');
Route::get('addInk', [\App\Http\Controllers\InkController::class, 'create'])->name('addInk.add');
Route::post('inksStore/{id}', [\App\Http\Controllers\InkController::class, 'store'])->name('ink.store');
Route::get('showInk', [\App\Http\Controllers\InkController::class, 'show'])->name('ink.show');
Route::get('editInk', [\App\Http\Controllers\InkController::class, 'edit'])->name('ink.edit');
Route::post('inksUpdate/{id}', [\App\Http\Controllers\InkController::class, 'update'])->name('ink.update');
Route::get('deleteInk', [\App\Http\Controllers\InkController::class, 'delete'])->name('ink.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
