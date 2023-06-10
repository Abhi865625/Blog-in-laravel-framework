<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\Blog_detailsController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\TeamController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/blog-details',[Blog_detailsController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/team',[TeamController::class, 'index']);
Route::get('/',[IndexController::class, 'index']);