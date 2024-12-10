<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/')

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/products', [HomeController::class, 'product'])->name('product');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/treatments/facial', [HomeController::class, 'facial'])->name('facial');
Route::get('/treatments/vital-injector', [HomeController::class, 'vitalInjector'])->name('vitalInjector');
Route::get('/treatments/hair-removal', [HomeController::class, 'hairRemoval'])->name('hairRemoval');
Route::get('/treatments/infuse-brightening', [HomeController::class, 'infuseBrightening'])->name('infuseBrightening');
Route::get('/treatments/fnb-contouring', [HomeController::class, 'fnbContouring'])->name('fnbContouring');
Route::get('/treatments/infuse-brightening', [HomeController::class, 'infuseBrightening'])->name('infuseBrightening');
Route::get('/treatments/skin-booster', [HomeController::class, 'skinBooster'])->name('skinBooster');
Route::get('/treatments/health-wellness', [HomeController::class, 'healthWellness'])->name('healthWellness');
