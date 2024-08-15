<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideosController;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/member/{id}', [HomeController::class, 'memberUpgrade'])->name('member.update');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('/auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('auth.facebook.callback');


Route::prefix('/article')->controller(ArticleController::class)->group(function() {
    Route::get('/', 'index')->name('article.index');
    Route::get('/archived', 'archived')->name('article.archived');
    Route::get('/draft', 'draft')->name('article.draft');
    Route::get('/create', 'create')->name('article.create');
    Route::post('/store', 'store')->name('article.store');
    Route::get('/detail/{id}', 'detail')->name('article.detail');
    Route::delete('/delete/{id}', 'delete')->name('article.delete');
});

Route::prefix('/video')->controller(VideosController::class)->group(function() {
    Route::get('/', 'index')->name('video.index');
    Route::get('/archived', 'archived')->name('video.archived');
    Route::get('/draft', 'draft')->name('video.draft');
    Route::get('/create', 'create')->name('video.create');
    Route::post('/store', 'store')->name('video.store');
    Route::get('/detail/{id}', 'detail')->name('video.detail');
    Route::delete('/delete/{id}', 'delete')->name('video.delete');
});