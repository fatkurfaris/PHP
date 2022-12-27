<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
        $posts = static::all();
        // $post=[];    
        // foreach($posts as $p){
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
        }

}
