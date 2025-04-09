<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Client\MainClientController;
use App\Http\Controllers\Client\OrderClientController;
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

Route::get('/', [MainClientController::class, 'index']);
Route::get('/order', [OrderClientController::class, 'show'])->name('order.show');
Route::post('/order/next', [OrderClientController::class, 'next'])->name('order.next');
Route::post('/order/back', [OrderClientController::class, 'back'])->name('order.back');
Route::post('/order/submit', [OrderClientController::class, 'submit'])->name('order.submit');

Route::get('/dashboard', [DashboardAdminController::class, 'index']);
