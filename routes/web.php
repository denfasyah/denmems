<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrendingController as Trending;
use App\Http\Controllers\ProfileController as Profile;

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



Route::get('/trending', [Trending::class, 'index'])->name('trending');
Route::get('/profile', [Profile::class, 'index'])->name('profile');

Route::get('/', function () {
    return view('auth.login');
});

