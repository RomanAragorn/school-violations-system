<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('show.login');
});

// Login
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('is_admin');

    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    });
});
