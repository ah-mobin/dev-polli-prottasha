<?php

use App\Http\Controllers\AdminChairmanSpeechController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminExecutiveDirectorController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminPromotionalBannerController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\AdminWelcomeNoteController;
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


        Route::group(['prefix'=>'welcome-note','as'=>'admin.welcome-note'],function(){
            Route::get('/',[AdminWelcomeNoteController::class,'index']);
            Route::post('title',[AdminWelcomeNoteController::class,'titleUpdate'])->name('.title');
            Route::post('note',[AdminWelcomeNoteController::class,'noteUpdate'])->name('.note');
        });

        Route::group(['prefix'=>'chairman-speech','as'=>'admin.chairman-speech'],function(){
            Route::get('/',[AdminChairmanSpeechController::class,'index']);
            Route::post('title',[AdminChairmanSpeechController::class,'titleUpdate'])->name('.title');
            Route::post('speech',[AdminChairmanSpeechController::class,'speechUpdate'])->name('.speech');
            Route::post('image',[AdminChairmanSpeechController::class,'imageUpdate'])->name('.image');
        });

        Route::group(['prefix'=>'executive-director','as'=>'admin.executive.director'],function(){
            Route::get('/',[AdminExecutiveDirectorController::class,'index']);
            Route::post('title',[AdminExecutiveDirectorController::class,'titleUpdate'])->name('.title');
            Route::post('speech',[AdminExecutiveDirectorController::class,'speechUpdate'])->name('.speech');
            Route::post('image',[AdminExecutiveDirectorController::class,'imageUpdate'])->name('.image');
        });

        Route::group(['prefix'=>'promotional-banner','as'=>'admin.promotional-banner'],function(){
            Route::get('/',[AdminPromotionalBannerController::class,'index']);
            Route::post('title',[AdminPromotionalBannerController::class,'titleUpdate'])->name('.title');
            Route::post('image',[AdminPromotionalBannerController::class,'imageUpdate'])->name('.image');
        });

        Route::group(['prefix'=>'event-news','as'=>'admin.events'],function(){
            Route::get('/',[AdminEventController::class,'index']);
            Route::post('/',[AdminEventController::class,'store'])->name('.store');
            Route::put('{id}',[AdminEventController::class,'update'])->name('.update');
            Route::delete('{id}',[AdminEventController::class,'delete'])->name('.delete');
        });

        Route::group(['prefix'=>'settings','as'=>'admin.settings'],function(){
            Route::get('/',[AdminSettingsController::class,'index']);
            Route::post('sitename',[AdminSettingsController::class,'siteNameUpdate'])->name('.sitename');
            Route::post('sitename-bn',[AdminSettingsController::class,'siteNameBnUpdate'])->name('.sitename-bn');
            Route::post('favicon',[AdminSettingsController::class,'faviconUpdate'])->name('.favicon');
            Route::post('logo',[AdminSettingsController::class,'logoUpdate'])->name('.logo');
            Route::post('address-one',[AdminSettingsController::class,'addressOneUpdate'])->name('.address-one');
            Route::post('address-two',[AdminSettingsController::class,'addressTwoUpdate'])->name('.address-two');
            Route::post('email',[AdminSettingsController::class,'emailUpdate'])->name('.email');
            Route::post('phone',[AdminSettingsController::class,'phoneNumberUpdate'])->name('.phone');
            Route::post('google-map',[AdminSettingsController::class,'googleMapUpdate'])->name('.google-map-id');
            Route::post('facebook-page',[AdminSettingsController::class,'facebookPageUpdate'])->name('.fb-page-id');
            Route::post('copyright',[AdminSettingsController::class,'copyrightTextUpdate'])->name('.copyright-text');
        });
    });
});


