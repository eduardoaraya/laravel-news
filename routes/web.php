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

Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('news.list');
Route::get('/news/{id}', [App\Http\Controllers\NewsController::class, 'view'])->name('news.view');
Route::get('/register', [App\Http\Controllers\NewsController::class, 'registerForm'])->name('news.register.form');
Route::post('/register', [App\Http\Controllers\NewsController::class, 'register'])->name('news.register.form.submit');

Route::post('/categories/register', [App\Http\Controllers\CategoriesController::class, 'register'])->name('categories.register.form.submit');

