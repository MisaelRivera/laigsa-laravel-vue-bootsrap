<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/clients', 'test');
    Route::get('/login', 'login');
    Route::post('/login', 'validateUser');
    Route::get('/dashboard', 'Dashboard');
});

Route::controller(OrdersController::class)->group(function () {
    Route::get('/orders', 'index');
});
