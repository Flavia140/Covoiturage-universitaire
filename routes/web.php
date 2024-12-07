<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TripController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.accueil');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::middleware(['web'])->group(function () {
Route::get('/publish', [TripController::class, 'create'])->name('publish');
    Route::get('/trips/publish', [TripController::class, 'create'])->name('trips.publish'); // Formulaire pour publier un trajet
    Route::post('/trips/publish', [TripController::class, 'store'])->name('trips.store');  // Enregistrement du trajet
    Route::get('/trips', [TripController::class, 'index'])->name('trips.index');        // Liste des trajets
});


Route::get('/trips/publish', [TripController::class, 'create'])->middleware('auth')->name('trips.publish');
Route::post('/trips/store', [TripController::class, 'store'])->middleware('auth')->name('trips.store');


Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search/results', [SearchController::class, 'results'])->name('search.results');
Route::get('/search', function () {
    return view('trip.search');
})->name('search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
