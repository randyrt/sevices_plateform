<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientAddEmailController;
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

/**ESPACE ADMINISTRATION */
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'doregister'])->name('register');

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'dologin'])->name('login');

Route::get('/', [ClientAddEmailController::class, 'index']);
Route::post('/', [ClientAddEmailController::class, 'insert'])->name('home');



