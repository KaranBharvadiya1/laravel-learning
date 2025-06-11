<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EligibilityController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FormHandlerController;
use App\Http\Controllers\ProductController;
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

route::get('/file-upload', [FileUploadController::class, 'showForm'])->name('file.upload');
route::post('/file-upload', [FileUploadController::class, 'uploadFile']);
    
route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');