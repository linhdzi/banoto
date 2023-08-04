<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/customers/index', [CustomerController::class, 'getCate']);
Route::get('/customers/detail', [CustomerController::class, 'detail']);
Route::get('/customers/shop/{id}', [CustomerController::class, 'shop']);
Route::get('/customers/shop',[CustomerController::class, 'getAll']);

