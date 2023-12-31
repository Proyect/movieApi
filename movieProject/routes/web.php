<?php

use App\Http\Controllers\imagController;
use App\Http\Controllers\MovieController;
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


Route::get('/', function () {
    return view('welcome');
});*/

//Routes in Movie
Route::get('/', [MovieController::class,"index"])->name('movie.index');
Route::get('/movie.data', [MovieController::class,"show"])->name("show");
Route::post('/movie.update', [MovieController::class,'update'])->name('movie.update');
Route::post('/movie.edit', [MovieController::class,'edit'])->name('movie.edit');
Route::delete('/movie.delte', [MovieController::class,'delete'])->name('movie.delete');
