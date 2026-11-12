<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/our-story', 'our-story')->name('our-story');
Route::view('/faqs', 'faqs')->name('faqs');


// Route::view('/our-philosophy', 'our-philosophy')->name('our-philosophy');

// Route::view('/products/moroccan-soap', 'products.Moroccan-soap')->name('products.moroccan-soap');