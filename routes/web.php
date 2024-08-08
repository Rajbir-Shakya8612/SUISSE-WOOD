<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/reset/request', function () {
    return view('reset');
});
Route::get('/reset/request-sent', function () {
    return view('reset-request');
});

Route::get('/admin', function () {
    return view('admin-panel.index');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/products', function () {
    return view('frontend.pages.products');
});

Route::get('/product-detail', function () {
    return view('frontend.pages.productDetail');


});





Route::get('/auth/login', function () {
    return view('login');
})->name('user-login');
Route::get('/auth/reset', function () {
    return view('reset-request');
});
Route::get('/auth/reset/email-sent', function () {
    return view('reset');
});

