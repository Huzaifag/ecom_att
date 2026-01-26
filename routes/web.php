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


Route::get('/login/{role}', function ($role) {
    return view('auth.login_page', ['role' => $role]);
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

Route::get('/checkout', function () {
    return view('website.pages.checkout');
});

// bulk order page
Route::get('/bulk-order', function () {
    return view('website.pages.bulk-order');
});

// policy pages
Route::get('/buying-policy', function () {
    return view('website.pages.buying_policy');
});

Route::get('/security-policy', function () {
    return view('website.pages.security_policy');
});

Route::get('/privacy-policy', function () {
    return view('website.pages.privacy_policy');
});

Route::get('/return-and-refund-policy', function () {
    return view('website.pages.return_and_refund_policy');
});

Route::get('/terms-and-conditions', function () {
    return view('website.pages.terms_and_conditions');
});

Route::get('/business-with-us', function () {
    return view('website.pages.business_with_us');
});

Route::get('/track-order', function () {
    return view('website.pages.track_order');
});

Route::get('/share-idea', function () {
    return view('website.pages.share_idea');
});


Route::get('/favorites', function () {
    return view('website.pages.favorites');
});


Route::get('/profile', function () {
    return view('website.pages.profile');
});




// User Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login/{role}', function ($role) {
        return view('auth.login_page', ['role' => $role]);
    })->name('login.form');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    // Guest routes (no authentication required)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login.form');
        Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');
    });

    // Protected routes (authentication required)
    Route::middleware('admin')->group(function () {
        Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [\App\Http\Controllers\Admin\AppController::class, 'index'])->name('admin.dashboard');
        Route::get('/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/products/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
    });
});

// Admin layout page route (remove this as it's now protected)
Route::get('/admin/layout', [\App\Http\Controllers\Admin\AppController::class, 'index'])->name('admin.layout');