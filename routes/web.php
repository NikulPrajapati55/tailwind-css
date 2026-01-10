<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TenantAuthMiddleware;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;




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
        Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
        Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
        Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
        Route::post('/team', [TeamController::class, 'store'])->name('team.store');
        Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    });
