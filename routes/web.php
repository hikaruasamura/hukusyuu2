<?php

use Illuminate\Support\Facades\Route;
use App\HttpControllers\PostController;
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
Route::get('/categories/{category}', [CategoryController::class,'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::delete('/posts/{post}', [PostController::class,'delete']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/', [PostControlle::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
