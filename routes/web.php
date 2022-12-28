<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
Route::post('/sendOrder', [MailController::class, 'order'])->name('sendOrder');

Route::get('/', [IndexController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);

Route::get('/{lang?}', [IndexController::class, 'setLocale'])->name('main');
Route::get('/services/{lang?}', [ServicesController::class, 'setLocale'])->name('services');
Route::get('/team/{lang?}', [TeamController::class, 'setLocale'])->name('team');
