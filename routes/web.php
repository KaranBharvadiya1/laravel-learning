<?php

use App\Http\Controllers\EligibilityController;
use App\Http\Controllers\FormHandlerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'index']);
;
Route::get('/user/{name}/{city}', [UserController::class, 'show']);

Route::get('/eligibility', [EligibilityController::class, 'check']);

route::get('/home', [ProfileController::class, 'home'])->name('home');

route::get('/search', [SearchController::class, 'index']);

route::get('/form', [FormHandlerController::class, 'showForm']);
route::post('/submit', [FormHandlerController::class, 'handleForm']);
    