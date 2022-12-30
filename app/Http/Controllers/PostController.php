<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // public function index()
    // {
    //     return view('blog',[
    //         "title" => "Blog",
    //         "posts" => Post::all(),
    //     ]);
    // }

    public function index()
    {
        return view('blog',[
            "title" => "All Posts",
            "active" => 'blog',
            "posts" => Post::latest()->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
