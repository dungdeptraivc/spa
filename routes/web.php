<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.pages.home');
});
Route::get('/intro', function () {
    return view('front.pages.introduce');
});
Route::get('/blog', function () {
    return view('front.pages.blog');
});
Route::get('/contact', function () {
    return view('front.pages.contact');
});
Route::get('/service', function () {
    return view('front.pages.service');
});