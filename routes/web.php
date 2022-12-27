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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author" => "fatkur rizal rochmadian putra",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt, quibusdam obcaecati tenetur impedit esse quos ab 
            placeat laboriosam delectus, quia repellendus dolor dolore. Officiis nostrum possimus commodi fugiat? Dicta veritatis maxime 
            aliquam officiis id iste totam minima praesentium consequuntur fuga a itaque incidunt deleniti quisquam, voluptatum voluptates mollitia
             repellat sequi nam dignissimos inventore quae. Veritatis sed doloremque architecto animi ab magni 
            ipsam fuga ipsa inventore officiis amet et voluptatum perspiciatis dolorem, tempore error autem nostrum, ex commodi dolores! Vel?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" =>"judul-post-kedua",
            "author" => "fikry ardiato",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt, quibusdam obcaecati tenetur impedit esse quos ab 
            placeat laboriosam delectus, quia repellendus dolor dolore. Officiis nostrum possimus commodi fugiat? Dicta veritatis maxime 
            aliquam officiis id iste totam minima praesentium consequuntur fuga a itaque incidunt deleniti quisquam, voluptatum voluptates mollitia
             repellat sequi nam dignissimos inventore quae. Veritatis sed doloremque architecto animi ab magni 
            ipsam fuga ipsa inventore officiis amet et voluptatum perspiciatis dolorem, tempore error autem nostrum, ex commodi dolores! Vel?"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" =>"judul-post-ketiga",
            "author" => "zidane azzam",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt, quibusdam obcaecati tenetur impedit esse quos ab 
            placeat laboriosam delectus, quia repellendus dolor dolore. Officiis nostrum possimus commodi fugiat? Dicta veritatis maxime 
            aliquam officiis id iste totam minima praesentium consequuntur fuga a itaque incidunt deleniti quisquam, voluptatum voluptates mollitia
             repellat sequi nam dignissimos inventore quae. Veritatis sed doloremque architecto animi ab magni 
            ipsam fuga ipsa inventore officiis amet et voluptatum perspiciatis dolorem, tempore error autem nostrum, ex commodi dolores! Vel?"
        ],
        ];
    return view('blog',[
        "title" => "Blog",
        "post" => $blog_posts,
    ]);
});

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author" => "fatkur rizal rochmadian putra",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt, quibusdam obcaecati tenetur impedit esse quos ab 
            placeat laboriosam delectus, quia repellendus dolor dolore. Officiis nostrum possimus commodi fugiat? Dicta veritatis maxime 
            aliquam officiis id iste totam minima praesentium consequuntur fuga a itaque incidunt deleniti quisquam, voluptatum voluptates mollitia
             repellat sequi nam dignissimos inventore quae. Veritatis sed doloremque architecto animi ab magni 
            ipsam fuga ipsa inventore officiis amet et voluptatum perspiciatis dolorem, tempore error autem nostrum, ex commodi dolores! Vel?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" =>"judul-post-kedua",
            "author" => "fikry ardiato",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt, quibusdam obcaecati tenetur impedit esse quos ab 
            placeat laboriosam delectus, quia repellendus dolor dolore. Officiis nostrum possimus commodi fugiat? Dicta veritatis maxime 
            aliquam officiis id iste totam minima praesentium consequuntur fuga a itaque incidunt deleniti quisquam, voluptatum voluptates mollitia
             repellat sequi nam dignissimos inventore quae. Veritatis sed doloremque architecto animi ab magni 
            ipsam fuga ipsa inventore officiis amet et voluptatum perspiciatis dolorem, tempore error autem nostrum, ex commodi dolores! Vel?"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" =>"judul-post-ketiga",
            "author" => "zidane azzam",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore nesciunt, quibusdam obcaecati tenetur impedit esse quos ab 
            placeat laboriosam delectus, quia repellendus dolor dolore. Officiis nostrum possimus commodi fugiat? Dicta veritatis maxime 
            aliquam officiis id iste totam minima praesentium consequuntur fuga a itaque incidunt deleniti quisquam, voluptatum voluptates mollitia
             repellat sequi nam dignissimos inventore quae. Veritatis sed doloremque architecto animi ab magni 
            ipsam fuga ipsa inventore officiis amet et voluptatum perspiciatis dolorem, tempore error autem nostrum, ex commodi dolores! Vel?"
        ],
        ];

        $new_post=[];    
        foreach($blog_posts as $post){
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "single post",
        "post" => $new_post,
    ]);
});
