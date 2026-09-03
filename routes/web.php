<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/events', function () {
    return view('pages.events');
})->name('events');

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