<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/posts/create', [PostsController::class, 'create']);

Route::post('/posts', [PostsController::class, 'store']);

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);

Route::put('/posts/{post}', [PostsController::class, 'update']);