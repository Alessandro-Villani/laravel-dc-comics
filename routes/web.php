<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/characters', [PageController::class, 'characters'])->name('characters');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');

Route::get('/tv', [PageController::class, 'tv'])->name('tv');

Route::get('/games', [PageController::class, 'games'])->name('games');

Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');

Route::get('/videos', [PageController::class, 'videos'])->name('videos');

Route::get('/fans', [PageController::class, 'fans'])->name('fans');

Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/shop', [PageController::class, 'shop'])->name('shop');

//Comics Routes

//Get index
Route::get('/comics', [ComicController::class, 'index'])->name('comics');

//Get create

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//Post comic

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//Get details
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//Get comic edit page

Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

//Put edited comic

Route::put('comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
