<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [RecipeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'show'])->name('profile');
Auth::routes();


Route::resource('/home', HomeController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/recipes', RecipeController::class);


Route::get('/recipes/create', function () {
})->middleware('auth');

// Route::middleware('auth')->group(function () {
//     Route::get('/recipes/create', [RecipeController::class, 'create'])->name('create');
// });
