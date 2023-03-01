<?php

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
session_start();
Route::get('/', function () {
    // return 'hello, world!';
    return view('welcome');
})->name('home');

Route::get('about', ["App\Http\Controllers\\" . PageController::class, 'about']);

Route::get('/about2', function () {
    return view('about2');
});

Route::get('/articles', ["App\Http\Controllers\\" . ArticleController::class, 'index'])
  ->name('articles.index');

Route::get('articles/create', "App\Http\Controllers\\" . 'ArticleController@create')
  ->name('articles.create');

Route::post('articles', "App\Http\Controllers\\" . 'ArticleController@store')
  ->name('articles.store');

Route::get('articles/{id}', ["App\Http\Controllers\\" . ArticleController::class, 'show'])
  ->name('articles.show');
