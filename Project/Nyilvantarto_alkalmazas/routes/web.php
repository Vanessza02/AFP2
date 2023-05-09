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
})->name('home');

Route::get('/login', [Controllers\Auth\SessionController::class, 'index']);
Route::post('/login', [Controllers\Auth\SessionController::class, 'store'])->name('login.user');

Route::get('/register', [Controllers\Auth\RegisterController::class, 'index']);
Route::post('/register', [Controllers\Auth\RegisterController::class, 'store'])->name('register.create');

Route::get('/{theme}', [Controllers\DashboardController::class, 'show'])->name('topic.show')->middleware('auth');

Route::post('/groups', [Controllers\TeamController::class, 'store'])->name('team.create');
Route::get('/groups/teampage', [Controllers\TeamController::class, 'index']);
Route::get('/logout', [Controllers\Auth\SessionController::class, 'destroy'])->name('logout');
