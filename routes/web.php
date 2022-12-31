<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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
        "title" => "welcome Home",
        'active' => 'laravel',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "fatkur Rizal Rochmadiaan Putra",
        "email" => "fafaafaf@gmail.com",
        'active' => 'about',
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home",
        'active' => 'home',
    ]);
});



Route::get('/blog',[PostController::class, 'index']);


Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('blog',[
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category','author'),
       
//     ]);
// });

Route::get('/authors/{author:username}', function(User $author) {
   return view('blog',[
        'title' => "Post By Autho : $author->name",
        'active' => 'blog',
        'posts' => $author->posts->load('category','author'),
    ]);
});