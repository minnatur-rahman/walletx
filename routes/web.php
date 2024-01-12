<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories',[CategoryController::class, 'index'])->name('categories');

Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');


// http://127.0.0.1:8000/category/create
