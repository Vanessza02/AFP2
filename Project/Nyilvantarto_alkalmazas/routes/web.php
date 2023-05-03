<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');
});

Route::get('/login', [Controllers\LoginController::class, 'index']);
Route::post('/login', [Controllers\LoginController::class, 'store'])->name('login.user');

Route::get('/register', [Controllers\RegisterController::class, 'index']);
Route::post('/register', [Controllers\RegisterController::class, 'store'])->name('register.create');

Route::get('/{theme}', [Controllers\DashboardController::class, 'show'])->name('topic.show');
