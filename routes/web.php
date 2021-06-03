<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Models\Contact;
use App\Models\HomeCarrousel;
use App\Models\HomeCarte;
use App\Models\Homecontent;
use App\Models\Homeequipe;
use App\Models\Homeservice;
use App\Models\Hometesti;
use App\Models\Hometitrecontent;
use App\Models\Hometitreequipe;
use App\Models\Hometitreservice;
use App\Models\Hometitretesti;
use App\Models\Homevideo;
use App\Models\Logo;
use App\Models\Promotion;
use App\Models\Servicecard;
use Database\Seeders\HometitretestiSeeder;
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
    $logos = Logo::all();
    $carrousels = HomeCarrousel::all();
    $homecarte = HomeCarte::all();
    $hometitrecontent = Hometitrecontent::all();
    $homecontent = Homecontent::all();
    $homevideo = Homevideo::all();
    $hometitretesti = Hometitretesti::all();
    $hometesti = Hometesti::all();
    $hometitreservice = Hometitreservice::all();
    $homeservices = Homeservice::all();
    $hometitreequipe = Hometitreequipe::all();
    $homeequipe = Homeequipe::all();
    $promotion = Promotion::all();
    $contacts = Contact::all();
    return view('welcome', compact('logos', 'carrousels', 'homecarte', 'hometitrecontent', 'homecontent', 'homevideo', 'hometitretesti', 'hometesti', 'hometitreservice', 'homeservices', 'hometitreequipe', 'homeequipe', 'promotion', 'contacts', ));
})->name('homes');

Auth::routes();

Route::get('/con', function () {
    return view('connexion/pageconnexion');
});


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// BLADE FRONT
Route::resource('service', ServiceController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);