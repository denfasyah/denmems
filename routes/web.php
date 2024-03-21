<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\LatestController as Latest;
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



Route::get('/', [NewController::class, 'index'])->name('new');
Route::get('/latest', [Latest::class, 'index'])->name('latest');
Route::get('/trending', [Trending::class, 'index'])->name('trending');
Route::get('/profile', [Profile::class, 'index'])->name('profile');

Route::get('/login', function () {
    return view('auth.login');
});

