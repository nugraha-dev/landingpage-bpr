<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BannerUserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return redirect()->route('admin.home');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['as' => 'auth.', 'prefix' => 'auth'], function () {
    Route::get('', function () {
        return redirect()->route('auth.login');
    });

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/post',  [LoginController::class, 'store'])->name('login.post');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('', function () {
        return redirect()->route('admin.home');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    Route::post('/proses-data', 'DashboardController@store');
    Route::get('/admin-dashboard/show/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
    Route::get('/admin-dashboard/destroy/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    Route::patch('/admin-dashboard/update/{id}', [DashboardController::class, 'update'])->name('dashboard.update');

    Route::get('/admin-user', [UserController::class, 'index'])->name('user');
    // Route::get('/admin-user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/admin-user/post', [UserController::class, 'store'])->name('user.store');
    Route::get('/admin-user/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/admin-user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::patch('/admin-user/update/{id}', [UserController::class, 'update'])->name('user.update');

    Route::get('/admin-banner', [BannerController::class, 'index'])->name('banner');
    Route::get('/admin-banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/admin-banner/post', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/admin-banner/show/{id}', [BannerController::class, 'show'])->name('banner.show');
    Route::get('/admin-banner/destroy/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
    Route::patch('/admin-banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'user']], function () {
    Route::get('', function () {
        return redirect()->route('user.home');
    });
    Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->name('home');

    Route::get('/user-banner', [BannerUserController::class, 'index'])->name('banner');
    Route::get('/user-banner/create', [BannerUserController::class, 'create'])->name('banner.create');
    Route::post('/user-banner/post', [BannerUserController::class, 'store'])->name('banner.store');
    Route::get('/user-banner/show/{id}', [BannerUserController::class, 'show'])->name('banner.show');
    Route::get('/user-banner/destroy/{id}', [BannerUserController::class, 'destroy'])->name('banner.destroy');
    Route::patch('/user-banner/update/{id}', [BannerUserController::class, 'update'])->name('banner.update');
});
