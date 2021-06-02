<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('homes');

// Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// BLADE FRONT
Route::resource('service', ServiceController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);