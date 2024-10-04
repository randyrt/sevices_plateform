<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientAddEmailController;

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


Route::middleware(\App\Http\Middleware\RedirectIfAuthenticated::class)->group(function () {

    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'doRegister'])->name('register');

    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::post('/login', [AuthController::class, 'doLogin'])->name('login');

});

Route::middleware(\App\Http\Middleware\Authenticate::class)->group(function () {

    Route::get('/admin/dashbord', [AdminController::class, 'showDashbord'])->name('admin.dashbord');
    Route::get('/admin/dashbord', [AdminController::class, 'listClientEmail'])->name('admin.dashbord');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});



Route::get('/', [ClientAddEmailController::class, 'index']);
Route::post('/', [ClientAddEmailController::class, 'insert'])->name('home');



