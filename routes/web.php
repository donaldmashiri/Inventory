<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('inventories',\App\Http\Controllers\InventoryController::class);
Route::resource('requisitions',\App\Http\Controllers\RequisitionController::class);
Route::resource('invoices',\App\Http\Controllers\InvoicesController::class);
Route::resource('users',\App\Http\Controllers\UserController::class);
