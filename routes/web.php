<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/partnerships', function () {
    return view('pages.partnerships');
})->name('partnerships');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/donate', function () {
    return view('pages.donate');
})->name('donate');

Route::get('/events', [EventController::class, 'index'])
    ->name('events');

Route::get('/events/{event}', [EventController::class, 'show'])
    ->name('events.show');

Route::get('/volunteer', function () {
    return view('pages.volunteer');
})->name('volunteer');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms-of-use', function () {
    return view('pages.terms');
})->name('terms');


/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('/events', [EventController::class, 'adminIndex'])
        ->name('admin.events.index');

    Route::get('/events/create', [EventController::class, 'create'])
        ->name('admin.events.create');

    Route::post('/events', [EventController::class, 'store'])
        ->name('admin.events.store');

    Route::get('/events/{event}/edit', [EventController::class, 'edit'])
        ->name('admin.events.edit');

    Route::put('/events/{event}', [EventController::class, 'update'])
        ->name('admin.events.update');

    Route::delete('/events/{event}', [EventController::class, 'destroy'])
        ->name('admin.events.destroy');

});

/*
|--------------------------------------------------------------------------
| Breeze Profile Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';