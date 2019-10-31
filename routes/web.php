<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

// Route::get('/', function () {
//     $nombre = "Jorge";
//     return view('home', compact('nombre'));
// })->name('home');
