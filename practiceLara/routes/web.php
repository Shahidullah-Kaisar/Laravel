<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/allUser', [UserController::class, 'allUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);
Route::get('/admin-login', [UserController::class, 'adminLogin']);

Route::view('/user-form', 'user-form');
Route::post('/addUser', [UserController::class, 'addUser']);