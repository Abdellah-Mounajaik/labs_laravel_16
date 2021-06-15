<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturebisController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeCarrouselController;
use App\Http\Controllers\HomeCarteController;
use App\Http\Controllers\HomecontentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeequipeController;
use App\Http\Controllers\HomeserviceController;
use App\Http\Controllers\HometestiController;
use App\Http\Controllers\HometitrecontentController;
use App\Http\Controllers\HometitreequipeController;
use App\Http\Controllers\HometitreserviceController;
use App\Http\Controllers\HometitretestiController;
use App\Http\Controllers\HomevideoController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ObjetController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ServicecardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TitrefeaturesController;
use App\Http\Controllers\UserController;
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
use App\Models\Objet;
use App\Models\Promotion;
use App\Models\Servicecard;
use App\Models\Titrefeatures;
use App\Models\User;
use Database\Seeders\HometitretestiSeeder;
use Illuminate\Support\Facades\Auth;
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
    $homecarte = HomeCarte::inRandomOrder()->limit(3)->get();
    $hometitrecontent = Hometitrecontent::all();
    $homecontent = Homecontent::all();
    $homevideo = Homevideo::all();
    $hometitretesti = Hometitretesti::all();
    $hometesti = Hometesti::all();
    $hometitreservice = Hometitreservice::all();
    $homeservices = Homeservice::inRandomOrder()->limit(9)->get();
    // $hometitreequipe = Hometitreequipe::all();
    $titreequipe = Hometitreequipe::all();
    
    $ceo = Homeequipe::where('poste_id', 1)->get();
    $team = Homeequipe::where('poste_id', '>', 1)->get();
    $membre = $team->random(2);

    // $homeequipe = Homeequipe::all();
    // $homeequipe = Homeequipe::where('poste_id', '>', 1)->get();
    // $homeequipec = $homeequipe->random(2);

    // $ceo = Homeequipe::where('poste_id', 1);

    $promotion = Promotion::all();
    $contacts = Contact::all();
    $footer = Footer::all();
    $objets = Objet::all();
    return view('welcome', compact( 'objets', 'ceo', 'team', 'membre', 'logos','titreequipe', 'carrousels', 'homecarte', 'hometitrecontent', 'homecontent', 'homevideo', 'hometitretesti', 'hometesti', 'hometitreservice', 'homeservices', 'promotion', 'contacts', 'footer'));
})->name('homes');






Route::get('/con', function () {
    return view('connexion/pageconnexion');
});


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// BLADE FRONT
// Route::resource('service', ServiceController::class);
Route::resource('blog', BlogController::class);
Route::resource('Blogpost', BlogpostController::class);

Route::resource('contact', ContactController::class);

Route::get('service/index',[ServiceController::class, 'index'])->name('service.index'); 

Route::get('/admin/home', [HomeController::class, 'index']);

// Route::get('pages/service', [AllController::class, 'service'])->name('page.service');

// Route::get('admin/home', function() {
//     return view('admin.home');
// });

// Route::resource('back/home/card', HomeCarteController::class);

Route::get('home/carrousel', function(){
    $carrousels = HomeCarrousel::all();
    $logos = Logo::all();
    return view('admin.pages.carrousel', compact('carrousels', 'logos'));
})->name('carrousel.index');

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

Route::get('service', function(){
    $hometitreservice = Hometitreservice::all();
    $homeservices = Homeservice::all();
    return view('admin/pages/service', compact('hometitreservice', 'homeservices'));
})->name('homeservice.index');

Route::get('home/equipe', function(){
    $titreequipe = Hometitreequipe::all();
    $homeequipe = Homeequipe::all();
    return view('admin/pages/equipe', compact('titreequipe', 'homeequipe'));
})->name('equipe.index');

Route::get('home/ready', function(){
    $promotion = Promotion::all();
    return view('admin/pages/ready',compact("promotion"));
})->name('promotion.index');


Route::get('service/tel', function(){
        $titrefea = Titrefeatures::all();
        $features = Feature::all();
        $featuresimage = Featureimage::all();
        $featurebis = Featurebis::all();
    return view('admin/pages/tel', compact('features', 'titrefea', 'featuresimage', 'featurebis'));
})->name('tel.index');


Route::get('service/carte', function(){
    $servicecard = Servicecard::all();
    return view("admin/pages/servicecarte", compact('servicecard'));
})->name('servicecard.index');

Route::get('admin/contact', function(){
    $contacts = Contact::all();
    return view('admin/pages/contact', compact('contacts'));
})->name('admincontact.index');

Route::get('admin/footer', function(){
    $footer = Footer::all();
    return view('admin/pages/footer', compact('footer'));
})->name('adminfooter.index');

Route::get('admin/profil', function(){
    $users = User::all();
    return view('admin/pages/profil', compact('users'));
})->name('user.index');

Route::resource('homeCarte', HomeCarteController::class);

// Route::resource('hometitrecontent', HometitrecontentController::class);

Route::get('hometitrecontent/{hometitrecontent}/',[HometitrecontentController::class, "edit"])->name('hometitrecontent.edit');

Route::put('hometitrecontent/{hometitrecontent}/',[HometitrecontentController::class, 'update'])->name('hometitrecontent.update');

// Route::resource('home/content', HomecontentController::class);


Route::get('home/content/{homecontent}/',[HomecontentController::class, "edit"])->name('homecontent.edit');
Route::put('home/content/{homecontent}/',[HomecontentController::class, "update"])->name('homecontent.update');

Route::get('home/video/{homevideo}/', [HomevideoController::class, "edit"])->name('homevideo.edit');
Route::put('home/video/{homevideo}/', [HomevideoController::class, "update"])->name('homevideo.update');

Route::get('home/titretesti/{hometitretesti}',[HometitretestiController::class, 'edit'])->name('titretesti.edit');
Route::put('home/titretesti/{hometitretesti}',[HometitretestiController::class, 'update'])->name('titretesti.update');

Route::get('home/testi/{hometesti}',[HometestiController::class, "edit"])->name('testi.edit');
Route::put('home/testi/{hometesti}',[HometestiController::class, "update"])->name('testi.update');

// Route::get('home/carrousel/{homeCarrousel}',[HomeCarrouselController::class, 'edit'])->name('homeCarrousel.edit');
// Route::put('home/carrousel/{homeCarrousel}',[HomeCarrouselController::class, 'update'])->name('carrousel.update');

Route::resource('homeCarrousel', HomeCarrouselController::class);

Route::get('home/logo/{logo}', [LogoController::class, "edit"])->name('logo.edit');
Route::put('home/logo/{logo}', [LogoController::class, "update"])->name('logo.update');

Route::get('home/service/{homeservice}', [HomeserviceController::class, "edit"])->name('homeservice.edit');
Route::put('home/service/{homeservice}', [HomeserviceController::class, "update"])->name('homeservice.update');
Route::delete('home/service/{homeservice}', [HomeserviceController::class, 'destroy'])->name('homeservice.destroy');

Route::get('home/titreservice/{hometitreservice}', [HometitreserviceController::class, "edit"])->name('titreservice.edit');
Route::put('home/titreservice/{hometitreservice}', [HometitreserviceController::class, "update"])->name('titreservice.update');


Route::get('home/titreequipe/{hometitreequipe}',[HometitreequipeController::class, "edit"])->name('titreequipe.edit');
Route::put('home/titreequipe/{hometitreequipe}',[HometitreequipeController::class, "update"])->name('titreequipe.update');



Route::get('home/equipe/{homeequipe}', [HomeequipeController::class, 'edit'])->name('homeequipe.edit');
Route::put('home/equipe/{homeequipe}', [HomeequipeController::class, 'update'])->name('homeequipe.update');

Route::get('home/redy/{promotion}',[PromotionController::class, 'edit'])->name('promotion.edit');
Route::put('home/redy/{promotion}',[PromotionController::class, 'update'])->name('promotion.update');

Route::get('service/teltitre/{titrefeatures}', [TitrefeaturesController::class, "edit"])->name('titrefeature.edit');
Route::put('service/teltitre/{titrefeatures}', [TitrefeaturesController::class, "update"])->name('titrefeature.update');

Route::get('service/tel/{feature}', [FeatureController::class, "edit"])->name('feature.edit');
Route::put('service/tel/{feature}', [FeatureController::class, "update"])->name('feature.update');

Route::get('service/telbis/{featurebis}', [FeaturebisController::class, "edit"])->name('featurebis.edit');
Route::put('service/telbis/{featurebis}', [FeaturebisController::class, "update"])->name('featurebis.update');

Route::get('service/carte/{servicecard}', [ServicecardController::class, "edit"])->name('servicecard.edit');
Route::put('service/carte/{servicecard}', [ServicecardController::class, "update"])->name('servicecard.update');

Route::get('admin/contact/edit/{contact}', [ContactController::class, "edit"])->name('admincontact.edit');
Route::put('admin/contact/{contact}', [ContactController::class, "update"])->name('admincontact.update');

Route::get('admin/footer/{footer}',[FooterController::class, "edit"])->name('adminfooter.edit');
Route::put('admin/footer/{footer}',[FooterController::class, "update"])->name('adminfooter.update');


Route::post('homes/objetcontact', [ObjetController::class, "store"])->name('contactobjet');
Route::post('homes/newsletter', [NewsletterController::class, "store"])->name('newsletter');


Route::get('user/edit/{user}', [UserController::class, "edit"])->name('user.edit');
Route::put('user/update/{user}', [UserController::class, "update"])->name('user.update');
Route::delete('user/delete/{user}', [UserController::class, "destroy"])->name('user.destroy');

Auth::routes();
