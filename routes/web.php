<?php



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
