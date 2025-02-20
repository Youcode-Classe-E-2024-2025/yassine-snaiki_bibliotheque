<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class,'index']);
Route::get('/books', [BookController::class,'books']);
Route::get('/books/{id}', [BookController::class,'book']);


Route::get('login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post( '/register',[RegisterController::class,'register']);


Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/borrowed', [ClientController::class, 'borrowed']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);


Route::post('/borrow', [ClientController::class, 'borrow']);

Route::post('/books/create', [BookController::class, 'create']);

Route::get('/books/delete/{id}', [BookController::class, 'delete']);
