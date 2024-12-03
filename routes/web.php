<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth.basic');;
Route::post('/user/create', [DashboardController::class, 'createUser'])->name('user.create');
