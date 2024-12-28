<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function(){
    return view('login');
});

// Route::get('/login', [LoginController::class, 'index'])->name('login.index');
// Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');



Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'user_dashboard'])->name('user.dashboard');
});

Route::middleware(['auth', 'user-access:vendor'])->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'vendor_dashboard'])->name('vendor.dashboard');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
});