<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrendingController as Trending;
use App\Http\Controllers\ProfileController as Profile;
// use App\Http\Controllers\FreshController as Fresh;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\PostController as Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/fresh', [Post::class, 'index'])->name('fresh');
// Route::get('/fresh', [Fresh::class, 'index'])->name('fresh');
Route::get('/trending', [Trending::class, 'index'])->name('trending');
Route::get('/profile', [Profile::class, 'index'])->name('profile');

// category
Route::get('/gaming', [Category::class, 'gaming'])->name('gaming');
Route::get('/anime', [Category::class, 'anime'])->name('anime');
Route::get('/technology', [Category::class, 'technology'])->name('technology');
Route::get('/dark', [Category::class, 'dark'])->name('dark');
Route::get('/random', [Category::class, 'random'])->name('random');



Route::get('/', function () {
    return view('auth.login');
});

