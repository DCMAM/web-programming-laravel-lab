<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [\App\Http\Controllers\MovieController::class, 'showMovies']);

Route::post('/insert-movie', [\App\Http\Controllers\MovieController::class, 'insertMovie']);

Route::put('/update-movie', [\App\Http\Controllers\MovieController::class, 'updateMovie']);

Route::delete('/delete-movie/{id}', [\App\Http\Controllers\MovieController::class, 'deleteMovie']);

Route::get('/search', [\App\Http\Controllers\MovieController::class, 'search']);

Route::get('/detail/{id}', [\App\Http\Controllers\MovieController::class, 'showDetailPage']);
