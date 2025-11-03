<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Frontend Routes
Route::name('frontend.')->group(function () {
    Route::view('/', 'frontend.index')->name('index');
    Route::view('/about', 'frontend.about')->name('about');
    Route::view('/services', 'frontend.services')->name('services');
    Route::view('/contact', 'frontend.contact')->name('contact');
});

// Admin Routes
Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(function () {
        Route::middleware('auth')->group(function () {
            // Admin Dashboard Home Page
            Route::view('/', 'admin.index')->name('index');

            // Admin Services
            Route::resource('services', ServiceController::class);
        });
        require __DIR__.'/auth.php';
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
