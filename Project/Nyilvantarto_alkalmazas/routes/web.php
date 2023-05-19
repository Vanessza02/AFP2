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

Route::middleware(['guest'])->group(function () {
Route::get('/login', [Controllers\Auth\SessionController::class, 'index']);
Route::post('/login', [Controllers\Auth\SessionController::class, 'store'])->name('login.user');

Route::get('/register', [Controllers\Auth\RegisterController::class, 'index']);
Route::post('/register', [Controllers\Auth\RegisterController::class, 'store'])->name('register.create');
});

Route::middleware(['auth'])->group(function () {
Route::get('/logout', [Controllers\Auth\SessionController::class, 'destroy'])->name('logout');

Route::get('/{theme}', [Controllers\DashboardController::class, 'show'])->name('topic.show')->middleware('auth');

Route::post('/groups', [Controllers\TeamController::class, 'store'])->name('team.create');
Route::post('/addMember', [Controllers\TeamController::class, 'addMember'])->name('add.member');

Route::post('/ratings', [Controllers\RatingController::class, 'rating'])->name('ratingChoice');
Route::post('/ratingTheMember', [Controllers\RatingController::class, 'store'])->name('rating');
    
Route::get('fullcalendar','FullCalendarController@index');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');    
});
