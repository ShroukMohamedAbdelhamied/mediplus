<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ErrorsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

//Route::get('/', function () {
  //  return view('test');
//});
Route::group([
  'prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
  Route::get('/', [Frontpages::class,'home'])->name('home');
  Route::get('/portfolio', [PortfolioController::class,'portfolio'])->name('portfolio');
  Route::get('/service', [ServicesController::class,'service'])->name('service');
  Route::get('/error', [ErrorsController::class,'error'])->name('error');
  Route::get('/doctor', [DoctorsController::class,'doctor'])->name('doctor');
  Route::get('/blog', [BlogController::class,'blog'])->name('blog');
  Route::get('/contact', [ContactController::class,'contact'])->name('contact');
  Route::get('/language/{locale}', [Frontpages::class, 'languageChange'])->name('language.change');
});


