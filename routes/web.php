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



Route::get('/fresh', [Post::class, 'index'])->name('fresh');
// Route::get('/fresh', [Fresh::class, 'index'])->name('fresh');
Route::get('/trending', [Trending::class, 'index'])->name('trending');
Route::get('/profile', [Profile::class, 'index'])->name('profile');
// Route::get('/profile/{user}', [Profile::class, 'index'])->name('profile');


// category
Route::get('/gaming', [Category::class, 'gaming'])->name('gaming');
Route::get('/anime', [Category::class, 'anime'])->name('anime');
Route::get('/technology', [Category::class, 'technology'])->name('technology');
Route::get('/dark', [Category::class, 'dark'])->name('dark');
Route::get('/random', [Category::class, 'random'])->name('random');

// auth
Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'store']);

Route::get('/', [Login::class, 'index'])->name('login');
Route::post('/', [Login::class, 'authenticate']);






