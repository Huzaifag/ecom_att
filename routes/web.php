<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.index');
});


Route::get('/shop', function () {
    return view('website.pages.shop');
});


Route::get('/blog', function () {
    return view('website.pages.blog');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/contact', function () {
    return view('website.pages.contact');
});

Route::get('/about', function () {
    return view('website.pages.about');
});

Route::get('/cart', function () {
    return view('website.pages.cart');
});

// Admin layout page route
Route::get('/admin/layout', [\App\Http\Controllers\Admin\AppController::class, 'index'])->name('admin.layout');