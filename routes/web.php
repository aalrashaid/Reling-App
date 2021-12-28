<?php

use Illuminate\Support\Facades\Route;

// The Import  Controller All 
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MoviedetailsController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\RequestPostsController;
use App\Http\Controllers\TvSeriesController;
use App\Http\Controllers\TvSeriesdetailsController;
use App\Http\Controllers\AnimeSeriesController;
use App\Http\Controllers\AnimeSeriesdetailsController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\WatchListController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// The  Controller get All  
Route::resource('Profiles', ProfilesController::class);
Route::resource('Movie', MovieController::class);
Route::resource('Moviedetails', MoviedetailsController::class);
Route::resource('Collections', CollectionsController::class);
Route::resource('RequestPosts', RequestPostsController::class);
Route::resource('TvSeries', TvSeriesController::class);
Route::resource('TvSeriesdetails', TvSeriesdetailsController::class);
Route::resource('AnimeSeries', AnimeSeriesController::class);
Route::resource('Lists', ListsController::class);
Route::resource('WatchList', WatchListController::class);
Route::resource('AnimeSeriesdetails', AnimeSeriesdetailsController::class);
Route::resource('People', PeopleController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
