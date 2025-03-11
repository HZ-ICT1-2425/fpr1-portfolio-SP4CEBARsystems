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
//Route::get('posts', [PostController::class, 'index'])->name('posts.index');
//Route::post('posts', [PostController::class, 'store'])->name('posts.store');
//Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::resource('faq', FaqController::class);

//Route::get('faq/{id}', [FaqController::class, 'show']);
