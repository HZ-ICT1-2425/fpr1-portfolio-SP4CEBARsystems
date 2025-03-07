<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/dashboard', [GradeController::class, 'dashboard']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{id}', [PostController::class, 'show']);

Route::get('/faq', [FaqController::class, 'index']);

Route::get('faq/{id}', [FaqController::class, 'show']);
