<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/dashboard', [GradeController::class, 'dashboard']);

Route::get('/profile', [PageController::class, 'profile']);

Route::resource('posts', PostController::class);

//Route::get('posts/{id}', [PostController::class, 'show']);

Route::resource('faq', FaqController::class);

//Route::get('faq/{id}', [FaqController::class, 'show']);
