<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestmonialController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use PHPUnit\Architecture\Services\ServiceContainer;
use PHPUnit\TextUI\Configuration\ConstantCollection;

Route::name('front.')->group(function(){
    // Route::view('/','front.index')->name('home');

    Route::get('/',[FrontController::class,'index'])->name("home");
    Route::get('/about',[FrontController::class,'about'])->name("about");
    Route::get('/services',[FrontController::class,'services'])->name("services");

    Route::get('/contact',[FrontController::class,'contact'])->name("contact");
    Route::post('/contact/store',[FrontController::class,'store'])->name("contact.store");

    // Route::view('about','front.about')->name('about');
    // Route::view('services','front.services')->name('services');
    // Route::view('contact','front.contact')->name('contact');

});



Route::name('superadmin.')->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath' )->prefix(LaravelLocalization::setLocale().'/superadmin')->group(function(){

       Route::middleware('auth')->group(function(){

              Route::view('/','admin.index')->name('index');

              Route::controller(ServiceController::class)->group(function(){
                    Route::resource('services', ServiceController::class);
              });

              Route::controller(FeatureController::class)->group(function(){
                    Route::resource('features', FeatureController::class);
              });

              Route::controller(TestmonialController::class)->group(function(){
                    Route::resource('testmonials', TestmonialController::class);
              });

              Route::controller(MemberController::class)->group(function(){
                    Route::resource('members', MemberController::class);
              });

              Route::controller(MessageController::class)->group(function(){
                    Route::resource('messages', MessageController::class)->except(['create','store']);
              });

              Route::controller(SettingController::class)->group(function(){
                    Route::resource('settings', SettingController::class);
              });


       });

});

require __DIR__.'/auth.php';



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

