<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrendingController as Trending;
use App\Http\Controllers\ProfileController as Profile;
// use App\Http\Controllers\FreshController as Fresh;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\PostController as Post;
use App\Http\Controllers\RegisterController as Register;
use App\Http\Controllers\LoginController as Login;

use App\Models\User;
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



Route::get('/fresh', [Post::class, 'index'])->name('fresh')->middleware('auth');
// Route::get('/fresh', [Fresh::class, 'index'])->name('fresh');
Route::get('/trending', [Trending::class, 'index'])->name('trending')->middleware('auth');
Route::get('/profile', [Profile::class, 'index'])->name('profile')->middleware('auth');
// Route::get('/profile/{user}', [Profile::class, 'index'])->name('profile');


// category
Route::get('/gaming', [Category::class, 'gaming'])->name('gaming')->middleware('auth');
Route::get('/anime', [Category::class, 'anime'])->name('anime')->middleware('auth');
Route::get('/technology', [Category::class, 'technology'])->name('technology')->middleware('auth');
Route::get('/dark', [Category::class, 'dark'])->name('dark')->middleware('auth');
Route::get('/random', [Category::class, 'random'])->name('random')->middleware('auth');

// auth
Route::get('/register', [Register::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [Register::class, 'store']);

Route::get('/', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [Login::class, 'authenticate']);
Route::post('/logout', [Login::class, 'logout']);






