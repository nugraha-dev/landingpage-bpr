<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

    Route::get('/admin-user', [UserController::class, 'index'])->name('user');
    Route::get('/admin-user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/admin-user/post', [UserController::class, 'store'])->name('user.store');
    Route::get('/admin-user/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/admin-user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::patch('/admin-user/update/{id}', [UserController::class, 'update'])->name('user.update');
});
