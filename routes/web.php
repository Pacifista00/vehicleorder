<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OrderController;

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

Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/', [AuthenticationController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/chart-data', [DashboardController::class, 'getChart']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/submit', [FormController::class, 'submit']);

Route::get('/serviceSchedule', [ServiceController::class, 'index']);
Route::post('/service/{id}', [ServiceController::class, 'service']);

Route::post('/reject/{id}', [OrderController::class, 'reject']);
Route::post('/accept/{id}', [OrderController::class, 'accept']);
Route::post('/done/{id}', [OrderController::class, 'done']);


Route::get('/history', [HistoryController::class, 'index']);
Route::get('/export', [HistoryController::class, 'export']);


Route::get('/order', [OrderController::class, 'index']);
