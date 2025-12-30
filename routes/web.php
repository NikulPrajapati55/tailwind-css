<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TenantAuthMiddleware;




Route::get('/optimizeapp', function () {
    Artisan::call('optimize:clear');
    return "application optimize successfully !!";
});

Route::view('/', 'home')->name('home');
Route::view('/about-section', 'about-section')->name('aboutsection');
Route::view('/team-section', 'team-section')->name('teamsection');
Route::view('/card-section', 'card-section')->name('cardsection');
Route::view('/form-section', 'form-section')->name('formsection');
Route::view('/test-section', 'test')->name('test');
Route::view('/swiper-section', 'swiper-section')->name('swiper');
Route::view('/popup-section', 'popup-button')->name('popup');
Route::view('/homepage-theme-1', 'theme.theme1')->name('theme1');



Route::get('/signup', [UserController::class, 'index'])->name('signup');
Route::post('/signup', [UserController::class, 'store'])->name('signup.create.user');

Route::post('/login', [UserController::class, 'login'])->name('login.process');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');



Route::domain('{tenant_slug}.localhost')
    ->middleware(['web', TenantAuthMiddleware::class])
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('tenant.dashboard');
        })->name('tenant.dashboard');


    });

