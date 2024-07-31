<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/products', function () {
    return view('frontend.pages.products');
});

Route::get('/admin', function () {
    return view('admin-panel.index');
});
