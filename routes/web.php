<?php

use App\Http\Controllers\FaqController2;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController2;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/dashboard', [GradeController::class, 'dashboard']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/posts', [PostController2::class, 'blogIndex']);

Route::get('posts/{id}', [PostController2::class, 'blogShow']);

Route::get('/faq', [FaqController2::class, 'faqIndex']);

Route::get('faq/{id}', [FaqController2::class, 'faqShow']);
