<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Hariyanto Dawaso',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, est laudantium minus earum consequatur voluptatem autem sit distinctio consectetur tempora quas neque quos ad beatae velit animi facilis voluptatibus ipsam perspiciatis? Adipisci veniam numquam beatae voluptatum ducimus sit! Voluptate voluptatibus exercitationem velit vero id, ut quia cum veniam facere corrupti, quidem dolorum, magnam modi quasi laudantium sed. Excepturi exercitationem id nemo quae impedit optio magni. Placeat, ipsa error, in ducimus eos ad, veritatis iste accusantium reprehenderit velit amet voluptates maiores.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Yanto S.Kom',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, in. Maxime ea esse mollitia est velit omnis impedit molestias quae unde iure! Est itaque dicta consequuntur temporibus eveniet accusantium quis quia quidem excepturi? Optio id libero illo rem voluptas itaque dolorem sapiente voluptates. Unde odio aperiam itaque rem aliquid tempora et quam. Laudantium provident sed obcaecati placeat aliquam reiciendis, deserunt exercitationem corporis aperiam quaerat aspernatur animi fugit, facilis labore minus unde, cumque est quia tempora? Molestias excepturi ratione iure vel illo saepe dolorum perferendis. Ullam omnis consequuntur incidunt libero minima, soluta voluptatibus quasi obcaecati inventore sapiente, nemo qui quo consectetur.',
        ],
        [
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'author' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestiae commodi doloremque, nemo rem vitae maxime quos nobis tempore maiores odit voluptate unde consequuntur minima culpa iusto, deserunt iure? Quis exercitationem fugiat corrupti praesentium nesciunt, itaque eum dolorem deleniti accusamus?',
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
