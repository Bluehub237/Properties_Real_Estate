<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImmoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImmoController::class, 'index'])->name('house.index');
Route::get('/about', [ImmoController::class, 'about'])->name('house.about');
Route::get('/property-list', [ImmoController::class, 'property_list'])->name('house.property');
Route::get('/dashboard3', [ImmoController::class, 'dashboard'])->name('house.dashboard');
Route::get('/visit', [ImmoController::class, 'visit'])->name('house.visit');
Route::get('/rent', [ImmoController::class, 'rent'])->name('house.rent');
Route::get('/wallet', [ImmoController::class, 'wallet'])->name('house.wallet');
Route::get('/profil', [ImmoController::class, 'profil'])->name('house.profil');
Route::get('/message', [ImmoController::class, 'message'])->name('house.message');
Route::get('/blog-detail', [ImmoController::class, 'blog_detail'])->name('house.blog-detail');
Route::get('/blog', [ImmoController::class, 'blog'])->name('house.blog');
Route::get('/blog-grid', [ImmoController::class, 'blog_grid'])->name('house.blog-grid');
Route::get('/signIn', [ImmoController::class, 'signIn'])->name('house.signIn');
Route::get('/signUp', [ImmoController::class, 'signUp'])->name('house.signUp');
Route::get('/abonnement', [ImmoController::class, 'abonnement'])->name('house.abonnement');


Route::get('/detail', [ImmoController::class, 'detail'])->name('house.detail');

/* gestion des mails de contact */
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
/* gestion des mails de contact */

/* gestion des proprietes */
Route::resource('/property', PropertyController::class);
/* gestion des proprietes */


Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');




Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
