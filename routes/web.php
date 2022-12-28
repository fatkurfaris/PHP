<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    return view('welcome',[
        "title" => "welcome Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "fatkur Rizal Rochmadiaan Putra",
        "email" => "fafaafaf@gmail.com",
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});



Route::get('/blog',[PostController::class, 'index']);


Route::get('posts/{post:slug}', [PostController::class, 'show']);
