<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImmoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/agent', function () {
    return view('agent.dashboard_agent');
});




























Route::get('/property-list', [ImmoController::class, 'property_list'])->name('house.property')->middleware('auth');
Route::get('/', [ImmoController::class, 'index'])->name('house.index')->middleware('auth');
Route::middleware('auth')->group(function(){
Route::get('/about', [ImmoController::class, 'about'])->name('house.about');
Route::get('/dashboard3', [ImmoController::class, 'dashboard'])->name('house.dashboard');
Route::get('/visit', [ImmoController::class, 'visit'])->name('house.visit');
Route::get('/rent', [ImmoController::class, 'rent'])->name('house.rent');
Route::get('/wallet', [ImmoController::class, 'wallet'])->name('house.wallet');
Route::get('/profil', [ImmoController::class, 'profil'])->name('house.profil');
Route::get('/message', [ImmoController::class, 'message'])->name('house.message');
Route::get('/blog-detail', [ImmoController::class, 'blog_detail'])->name('house.blog-detail');
Route::get('/blog', [ImmoController::class, 'blog'])->name('house.blog');
Route::get('/blog-grid', [ImmoController::class, 'blog_grid'])->name('house.blog-grid');
});

/* gestion connexion et inscription */
Route::middleware('guest')->group(function(){
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');
/* gestion connexion et inscription */

/* abonnement */
Route::get('/abonnement', [AbonnementController::class, 'create'])->name('house.abonnement')->middleware('auth');
Route::put('/abonnement', [AbonnementController::class, 'update'])->name('abonnement.update')->middleware('auth');
/* abonnement */

Route::get('/detail', [ImmoController::class, 'detail'])->name('house.detail')->middleware('auth');

/* gestion des mails de contact */
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index')->middleware('auth');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('auth');
/* gestion des mails de contact */

/* gestion des proprietes */
Route::resource('/property', PropertyController::class)->middleware('auth')->names('property')->middleware('auth');
/* gestion des proprietes */

/* gestion des visites */
Route::get('/visits', [VisitController::class, 'index'])->name('visits.index')->middleware('auth');
Route::post('/properties/{property}/visits', [VisitController::class, 'store'])->name('visits.store')->middleware('auth');
Route::delete('/visits/{visit}', [VisitController::class, 'destroy'])->name('visits.destroy')->middleware('auth');
Route::put('/visits/{visit}', [VisitController::class, 'update'])->name('visits.update')->middleware('auth');
/* gestion des visites */

Route::middleware('auth')->group(function () {
    Route::resource('admin/users', UserController::class)->names('users');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

/* gestion des contracts */
    // Création de contrat à partir d'une propriété
    Route::get('/property/{property}/contrat', [ContratController::class, 'createContrat'])->name('contrat.create')->middleware('auth');
    Route::put('/contrat/{contrat}/Validate', [ContratController::class, 'update'])->name('contrat.validate')->middleware('auth');
/* gestion des contracts */

/* gestion des paiements */
Route::get('/payment/{contrat}', [PaymentController::class, 'create'])->name('payments.create')->middleware('auth');
Route::post('/payment/{contrat}', [PaymentController::class, 'store'])->name('payments.store')->middleware('auth');
Route::get('/admin/payments', [PaymentController::class, 'index'])->name('admin.payments')->middleware('auth');
Route::put('/payments/{payment}/update-status', [PaymentController::class, 'update'])->name('payments.updateStatus')->middleware('auth');
Route::delete('/payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy')->middleware('auth');
/* gestion des paiements */

/*gestion du dashboard client */
Route::get('/admin/dashboard_payment', [DashboardController::class, 'dashboard_payment'])->name('admin.dashboard_payment')->middleware('auth');

/*gestion du dashboard client */

/* gestion des reservations */
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservation.store')->middleware('auth');

/* gestion des reservations */
