<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminSettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//frontend
Route::get('/',[PageController::class,'index'])->name('page.index');
Route::get('/about/history',[PageController::class,'history'])->name('page.history');
Route::get('/about/mission',[PageController::class,'mission'])->name('page.mission');
Route::get('/about/vision',[PageController::class,'vision'])->name('page.vision');
Route::get('/management/organogram',[PageController::class,'managementOrganogram'])->name('page.organogram');
Route::get('/what-we-do',[PageController::class,'whatWeDo'])->name('page.what-we-do');
Route::get('/legal-status',[PageController::class,'legalStatus'])->name('page.legal-status');
Route::get('/career',[PageController::class,'career'])->name('page.career');
Route::get('/career-details/{id}',[PageController::class,'careerDetails'])->name('page.career-details');
Route::get('/gallery',[PageController::class,'gallery'])->name('page.gallery');
Route::get('/contact-us',[PageController::class,'contactUs'])->name('page.contact-us');
Route::get('/chairman-speech',[PageController::class,'chairmanSpeech'])->name('page.chairman-speech');
Route::get('/executive-director',[PageController::class,'executiveDirector'])->name('page.executive-director');
Route::get('/welcome-note',[PageController::class,'welcomeNote'])->name('page.welcome-note');


Route::group(['prefix'=>'admin'],function(){
    Auth::routes(['register'=>false]);

    Route::middleware('auth')->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::view('about', 'backend.about')->name('about');
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('home-page',[AdminPageController::class,'homePage'])->name('admin.home');

        Route::get('settings',[AdminSettingsController::class,'index'])->name('admin.settings');
        Route::post('settings/sitename',[AdminSettingsController::class,'siteNameUpdate'])->name('admin.settings.sitename');
    });
});


