<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialsController;
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
Route::controller(FrontController::class)->name('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/subscribe', 'subscribe')->name('subscribe');
    Route::post('/contact', 'storeContact')->name('contact.store');
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

            // Admin Features
            Route::resource('features', FeatureController::class);

            // Messages
            Route::controller(MessageController::class)->group(function () {
                Route::get('messages', 'index')->name('messages.index');
                Route::get('messages/{message}', 'show')->name('messages.show');
                Route::delete('messages/{message}', 'destroy')->name('messages.destroy');
            });

            // Subscribers
            Route::controller(SubscriberController::class)->group(function () {
                Route::get('subscribers', 'index')->name('subscribers.index');
                Route::delete('subscribers/{subscriber}', 'destroy')->name('subscribers.destroy');
            });

            // Testimonial
            Route::resource('testimonials', TestimonialsController::class);

            // Settings
            Route::controller(SettingController::class)->group(function () {
                Route::get('settings', 'index')->name('settings.index');
                Route::put('settings', 'update')->name('settings.update');
            });
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
