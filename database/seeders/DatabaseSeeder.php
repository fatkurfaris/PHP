<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Fatkur Rizal',
            'email' => 'faris@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        User::create([
            'name' => 'Fikry Ardianto',
            'email' => 'farifikrys@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Bisnis',
            'slug' => 'bisnis',
        ]);
        
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'lorem ipsum yang pertama',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam reprehenderit corporis optio, deleniti fugiat magnam. Culpa autem illum enim ex eaque explicabo at nulla officiis fuga officia, excepturi, et consequatur quis expedita quam nemo modi natus exercitationem suscipit. Hic, est ducimus nulla accusantium suscipit dolorem animi modi veniam corporis aperiam corrupti unde exercitationem provident praesentium officiis cumque doloremque quaerat fugiat autem. Natus perspiciatis ea ducimus suscipit accusamus? Dolorem optio esse perspiciatis, ipsum culpa rerum quae eligendi dolore odio laborum assumenda molestiae vero! Modi, aspernatur rem? Necessitatibus earum cumque magnam dignissimos, voluptas harum reprehenderit asperiores possimus excepturi, optio ipsum, voluptates ducimus.',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'lorem ipsum yang kedua',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam reprehenderit corporis optio, deleniti fugiat magnam. Culpa autem illum enim ex eaque explicabo at nulla officiis fuga officia, excepturi, et consequatur quis expedita quam nemo modi natus exercitationem suscipit. Hic, est ducimus nulla accusantium suscipit dolorem animi modi veniam corporis aperiam corrupti unde exercitationem provident praesentium officiis cumque doloremque quaerat fugiat autem. Natus perspiciatis ea ducimus suscipit accusamus? Dolorem optio esse perspiciatis, ipsum culpa rerum quae eligendi dolore odio laborum assumenda molestiae vero! Modi, aspernatur rem? Necessitatibus earum cumque magnam dignissimos, voluptas harum reprehenderit asperiores possimus excepturi, optio ipsum, voluptates ducimus.',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'lorem ipsum yang ketiga',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam reprehenderit corporis optio, deleniti fugiat magnam. Culpa autem illum enim ex eaque explicabo at nulla officiis fuga officia, excepturi, et consequatur quis expedita quam nemo modi natus exercitationem suscipit. Hic, est ducimus nulla accusantium suscipit dolorem animi modi veniam corporis aperiam corrupti unde exercitationem provident praesentium officiis cumque doloremque quaerat fugiat autem. Natus perspiciatis ea ducimus suscipit accusamus? Dolorem optio esse perspiciatis, ipsum culpa rerum quae eligendi dolore odio laborum assumenda molestiae vero! Modi, aspernatur rem? Necessitatibus earum cumque magnam dignissimos, voluptas harum reprehenderit asperiores possimus excepturi, optio ipsum, voluptates ducimus.',
            'category_id' => 3,
            'user_id' => 2,
        ]);
    }
}
