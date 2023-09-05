<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::resource('about', AboutController::class);

Route::get('contact', ContactController::class);

Route::fallback(function () { //Instead of the default ERROR 404 Page
    return "Sorry, this page is not found!";
});
