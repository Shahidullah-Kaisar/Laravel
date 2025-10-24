<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/register', [AuthController::class, 'register'])->name('register.get');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.post');

Route::get('/login', [AuthController::class, 'login'])->name('login.get');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/posts', [DashboardController::class, 'ownPost'])->name('dashboard.posts');

    Route::get('/dashboard/posts/create', [PostController::class, 'create'])->name('posts.create.get');
    Route::post('/dashboard/posts/create', [PostController::class, 'store'] )->name('posts.create.post');
    Route::get('/dashboard/posts/{id}/edit', [PostController::class, 'edit'])->name(('posts.edit.get'));
    Route::patch('/dashboard/posts/{id}/edit', [PostController::class, 'update'])->name('posts.edit.post');
    Route::delete('/dashboard/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
    
    Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');

});