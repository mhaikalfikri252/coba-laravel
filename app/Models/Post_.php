<?php

namespace App\Models;


class Post
{

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "M Haikal Fikri",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus autem repellendus, quidem,
            dolores maiores sequi sunt tempore minus doloremque perferendis, deserunt iure mollitia placeat asperiores?
            Quis dolorum necessitatibus ab, totam ipsa excepturi sapiente facere.
            Nesciunt necessitatibus corporis ab consectetur totam voluptatem rem voluptate accusantium.
            Repellat veniam corporis nobis quia. Cum odit culpa, quibusdam inventore repellat,
            dolorem sequi ratione perferendis quisquam velit tenetur iusto aliquid voluptates et alias asperiores accusantium, odio aliquam aut saepe.
            Itaque cupiditate animi fugit dolorum voluptatum quo?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "M Haikal Fikri",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Sint vel sapiente magni eius porro dolor error sed quia impedit officia perspiciatis quae esse quidem labore ab odit sit eaque necessitatibus,
            eos, asperiores obcaecati vitae illum.
            Optio sed sint saepe perspiciatis repellendus et, atque quas illo exercitationem tenetur explicabo facilis.
            Quo veritatis sunt quisquam inventore quibusdam libero dolore suscipit incidunt debitis ipsam hic corrupti,
            veniam perferendis aspernatur tempore illum provident dignissimos dolorem doloribus earum officiis voluptatibus commodi temporibus cumque.
            Et, amet. Fuga, doloremque repellendus corporis consectetur a doloribus,
            ipsa suscipit dolores nam nihil in eligendi ex voluptatibus culpa distinctio quas obcaecati."
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
