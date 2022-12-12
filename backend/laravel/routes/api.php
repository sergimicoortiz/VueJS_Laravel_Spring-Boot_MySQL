<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\UserController;

Route::resource('mesa', MesaController::class);
Route::resource('category', CategoryController::class);
Route::resource('user', UserController::class);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
Route::get('profile', [UserController::class, 'getUserToken']);
