<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/',  [NewsController::class, 'index'])->name("home");

Route::prefix('news')->group(function() {
    Route::get('/category', [CategoriesController::class, 'show'])->name("categories");
    Route::get('/category/all', [CategoriesController::class, 'showAll'])->name("categories-show");
    Route::post('/category', [CategoriesController::class, 'store'])->name("categories.submit");
    Route::get('/', [NewsController::class, 'create'])->name("news-create");
    Route::post('/', [NewsController::class, 'store'])->name("news-store");
    Route::get('{newsId}', [NewsController::class, 'show'])->name("news-show");
});
