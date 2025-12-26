<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/optimizeapp', function () {
    Artisan::call('optimize:clear');
    return "application optimize successfully !!";
});

Route::view('/','home')->name('home');


Route::view('/about-section','about-section')->name('aboutsection');
Route::view('/team-section','team-section')->name('teamsection');
Route::view('/card-section','card-section')->name('cardsection');
Route::view('/form-section', 'form-section')->name('formsection');
Route::view('/test-section', 'test')->name('test');
Route::view('/swiper-section', 'swiper-section')->name('swiper');
Route::view('/popup-section', 'popup-button')->name('popup');
Route::view('/homepage-theme-1', 'theme.theme1')->name('theme1');


Route::view('/loginpanel', 'login.login')->name('login');
