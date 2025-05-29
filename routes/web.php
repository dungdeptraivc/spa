<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.pages.home');
});


Route::get('/intro', function () {
    return view('front.pages.introduce');
})->name('introduce');



Route::get('/blog', function () {
    return view('front.pages.blog');
})->name('blog');   


Route::get('/contact', function () {
    return view('front.pages.contact');
})->name('contact');


Route::get('/service', function () {
    return view('front.pages.service');
})->name('service');


Route::get('/login', function () {
    return view('front.pages.login');
})->name('login');


Route::get('/register', function () {
    return view('front.pages.register');
})->name('register');


Route::get('/forgost', function () {
    return view('front.pages.forgost');
})->name(   'forgost');

Route::get('/detail', function () {
    return view('front.pages.detail');
})->name(   'detail');


Route::get('/detail-product', function () {
    return view('front.pages.detail-product');
})->name(   'detail-product');



Route::get('/pay', function () {
    return view('front.pages.pay');
})->name(   'pay');


