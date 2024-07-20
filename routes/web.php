<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/',[PostController::class,'all']);
Route::get('/post-block',[PostController::class,'getby']);
Route::get('/detail/{id}',[PostController::class,'find']);
Route::get('/search', function () {
    return view('client/search');
});
Route::get('/post', function () {
    return view('client/post');
});
Route::get('/register', function () {
    return view('client/register');
});
