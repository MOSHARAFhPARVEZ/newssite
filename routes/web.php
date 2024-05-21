<?php

use App\Http\Controllers\BreakingnewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MakenewsController;
use App\Http\Controllers\NewstagController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ===============
// frontend part==
// ===============
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/makenewsdetails/{id}', [FrontendController::class, 'makenewsdetails'])->name('makenewsdetails');
// contact part
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/message', [ContactController::class, 'message'])->name('message');
// show message in dashboard
Route::get('/showmessage', [ContactController::class, 'showmessage'])->name('showmessage');
// Contact page info
Route::resource('/contactpage',ContactpageController::class);
// ===============
// frontend part==
// ===============



// ===============
// back end part==
// ===============
// profile part
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
// profile change part
Route::post('/profilechg', [ProfileController::class, 'profilechg'])->name('profilechg');
// cover change part
Route::post('/coverchg', [ProfileController::class, 'coverchg'])->name('coverchg');
// password change part
Route::post('/passwordchg', [ProfileController::class, 'passwordchg'])->name('passwordchg');
// Category part
Route::resource('/category', CategoryController::class);
// news tag part
Route::resource('/newstag', NewstagController::class);
//  make news part
Route::resource('/makenews', MakenewsController::class);
//  inventory part
Route::get('/inventory/{id}', [InventoryController::class, 'inventory'])->name('inventory');
Route::post('/inventorystore/{id}', [InventoryController::class, 'inventorystore'])->name('inventorystore');
//  Breaking news part
Route::resource('/breakingnews', BreakingnewsController::class);
// ===============
// back end part==
// ===============


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
