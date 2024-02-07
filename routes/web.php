<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MangaController;

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

Route::get('/',[ApiController::class, 'index'])->name('home');

Route::get('/genere/{genre_id}',[ApiController::class, 'animeByGenre'])->name('by.genre');

Route::get('/manga/{id_manga}',[MangaController::class, 'index'])->name('by.manga');

/* Route::get('/manga',[MangaController::class, 'MangaByGenre'])->name('genre.manga'); */
