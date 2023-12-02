<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;

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

Route::get('/', [PublicController::class , 'home'])->name('home');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::get('/recipe/index', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/show{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
