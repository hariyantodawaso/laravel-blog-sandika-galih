<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'name' => 'Hariyanto Dawaso',
            'email' => 'haariyantodawaso@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Yanto S.Kom',
            'email' => 'yanto@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eius sequi eum recusandae voluptates libero adipisci, veritatis, fuga asperiores vitae maxime? Est quos culpa autem aut at dicta reprehenderit nisi dolores beatae doloremque, repudiandae hic?',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eius sequi eum recusandae voluptates libero adipisci, veritatis, fuga asperiores vitae maxime? Est quos culpa autem aut at dicta reprehenderit nisi dolores beatae doloremque, repudiandae hic? Veritatis commodi dolore quisquam possimus ut illum quae at, asperiores molestias ratione quibusdam earum minus tempore fugiat recusandae, qui, eveniet autem accusamus sint vel praesentium consequatur est deleniti! Odio dignissimos repellat sunt laudantium minima, illum quis aperiam omnis architecto odit non quidem veniam tempora totam eum similique, nisi veritatis vero dolorem? Eius vero dolor consequatur repudiandae a porro. A incidunt enim fugit, at mollitia saepe.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eius sequi eum recusandae voluptates libero adipisci, veritatis, fuga asperiores vitae maxime? Est quos culpa autem aut at dicta reprehenderit nisi dolores beatae doloremque, repudiandae hic?',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eius sequi eum recusandae voluptates libero adipisci, veritatis, fuga asperiores vitae maxime? Est quos culpa autem aut at dicta reprehenderit nisi dolores beatae doloremque, repudiandae hic? Veritatis commodi dolore quisquam possimus ut illum quae at, asperiores molestias ratione quibusdam earum minus tempore fugiat recusandae, qui, eveniet autem accusamus sint vel praesentium consequatur est deleniti! Odio dignissimos repellat sunt laudantium minima, illum quis aperiam omnis architecto odit non quidem veniam tempora totam eum similique, nisi veritatis vero dolorem? Eius vero dolor consequatur repudiandae a porro. A incidunt enim fugit, at mollitia saepe.',
            'category_id' => 1,
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eius sequi eum recusandae voluptates libero adipisci, veritatis, fuga asperiores vitae maxime? Est quos culpa autem aut at dicta reprehenderit nisi dolores beatae doloremque, repudiandae hic?',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eius sequi eum recusandae voluptates libero adipisci, veritatis, fuga asperiores vitae maxime? Est quos culpa autem aut at dicta reprehenderit nisi dolores beatae doloremque, repudiandae hic? Veritatis commodi dolore quisquam possimus ut illum quae at, asperiores molestias ratione quibusdam earum minus tempore fugiat recusandae, qui, eveniet autem accusamus sint vel praesentium consequatur est deleniti! Odio dignissimos repellat sunt laudantium minima, illum quis aperiam omnis architecto odit non quidem veniam tempora totam eum similique, nisi veritatis vero dolorem? Eius vero dolor consequatur repudiandae a porro. A incidunt enim fugit, at mollitia saepe.',
            'category_id' => 2,
            'user_id' => 1,
        ]);
    }
}
