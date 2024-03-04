<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
function(){return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);


Route::get('/', [HomeController::class, 'index']);


Route::get('/product', [AdminController::class, 'product']);

Route::any('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::get('/showproduct', [AdminController::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class, 'updateview']);

Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::any('/search', [HomeController::class, 'search'])->name('search');

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart',[HomeController::class,'showcart']);

Route::get('/delete/{id}',[HomeController::class,'deletecart']);

Route::post('/order',[HomeController::class,'confirmorder']);

Route::get('/showorder',[AdminController::class,'showorder']);

Route::get('/updatestatus/{id}', [AdminController::class,'updatestatus']);

Route::delete('/deleteorder/{id}', [AdminController::class, 'deleteOrder'])->name('delete.order');

Route::get('/aboutus', [HomeController::class, 'aboutUs'])->name('user.aboutus');

Route::get('/', [HomeController::class, 'index'])->name('user.home');

Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');


