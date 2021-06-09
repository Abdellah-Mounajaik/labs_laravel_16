<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeCarteController;
use App\Http\Controllers\HomecontentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HometitrecontentController;
use App\Http\Controllers\HomevideoController;
use App\Http\Controllers\ServiceController;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Featurebis;
use App\Models\Featureimage;
use App\Models\Footer;
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
use App\Models\Newsletter;
use App\Models\Promotion;
use App\Models\Servicecard;
use App\Models\Titrefeatures;
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
    $homeservices = Homeservice::inRandomOrder()->limit(9)->get();
    // $hometitreequipe = Hometitreequipe::all();
    $titreequipe = Hometitreequipe::all();
    

    $homeequipe = Homeequipe::all();
    $homeequipe = Homeequipe::where('poste_id', '>', 1)->get();
    $homeequipec = $homeequipe->random(2);

    $ceo = Homeequipe::where('poste_id', 1);

    $promotion = Promotion::all();
    $contacts = Contact::all();
    $footer = Footer::all();
    return view('welcome', compact('logos','titreequipe', 'carrousels', 'homecarte', 'hometitrecontent', 'homecontent', 'homevideo', 'hometitretesti', 'hometesti', 'hometitreservice', 'homeservices', 'homeequipe', 'promotion', 'contacts', 'homeequipec', 'ceo', 'footer'));
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

Route::get('/admin/home', [HomeController::class, 'index']);

// Route::get('pages/service', [AllController::class, 'service'])->name('page.service');

// Route::get('admin/home', function() {
//     return view('admin.home');
// });

// Route::resource('back/home/card', HomeCarteController::class);

Route::get('home/carte', function(){
    $homecartes = HomeCarte::all();
    return view('admin/pages/homecarte', compact('homecartes'));
});


Route::get('home/content', function(){
    $hometitrecontent = Hometitrecontent::all();
    $homecontent = Homecontent::all();
    return view('admin/pages/content', compact('hometitrecontent', 'homecontent'));
})->name('content.index');

Route::get('home/video', function(){
    $homevideo = Homevideo::all();
    return view('admin/pages/video', compact('homevideo'));
})->name('video.index');

Route::get('home/testimonial', function(){
    $hometitretesti = Hometitretesti::all();
    $hometesti = Hometesti::all();
    return view('admin/pages/testimonial', compact('hometitretesti', 'hometesti'));
})->name('testimonial.index');


Route::resource('homeCarte', HomeCarteController::class);

// Route::resource('hometitrecontent', HometitrecontentController::class);

Route::get('hometitrecontent/{hometitrecontent}/',[HometitrecontentController::class, "edit"])->name('hometitrecontent.edit');

Route::put('hometitrecontent/{hometitrecontent}/',[HometitrecontentController::class, 'update'])->name('hometitrecontent.update');

// Route::resource('home/content', HomecontentController::class);


Route::get('home/content/{homecontent}/',[HomecontentController::class, "edit"])->name('homecontent.edit');
Route::put('home/content/{homecontent}/',[HomecontentController::class, "update"])->name('homecontent.update');

Route::get('home/video/{homevideo}/', [HomevideoController::class, "edit"])->name('homevideo.edit');
Route::put('home/video/{homevideo}/', [HomevideoController::class, "update"])->name('homevideo.update');
