<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;


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
    return view('welcome');
});

Route::get('articles',[ArticleController::class, 'index']);

Route::get('articles/new',[ArticleController::class, 'create']);

Route::get('articles/{id}',[ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'store']);

Route::get('articles/{id}/edit', [ArticleController::class, 'edit']);

Route::put('articles/{id}', [ArticleController::class, 'update']);

Route::delete('articles/{id}', [ArticleController::class, 'destroy']);

Route::resource('categories', CategoryController::class);
