<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yanida Nur Nabila",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum delectus quaerat nisi magnam inventore porro, exercitationem nihil iure consectetur, dolor facilis voluptates consequatur dicta blanditiis, unde harum. In minima possimus nostrum soluta quo consectetur sit inventore harum ex deleniti iste totam, quidem libero sunt adipisci enim. Commodi nisi, molestiae enim nam amet deserunt minus sint incidunt tempore voluptatum placeat, repudiandae cumque laborum quam delectus? Vel excepturi sequi voluptatibus tenetur minima at, quae eos mollitia voluptate iure architecto omnis aperiam doloremque."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yunni Setyawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In unde molestias molestiae dolores commodi obcaecati at labore ipsam itaque quisquam tenetur explicabo assumenda eveniet minima, modi iusto, omnis rem vel possimus a atque consectetur, fuga similique? Praesentium odio neque quibusdam excepturi iusto esse doloribus suscipit eum non, illo sed amet ullam debitis exercitationem quis quasi ab eos nihil veritatis ut in ducimus inventore eius vero. Hic totam asperiores repudiandae magni debitis officia inventore assumenda praesentium! Nihil veniam omnis alias! Deleniti similique reiciendis omnis error officia laboriosam eius labore velit consectetur. Exercitationem possimus corrupti quos explicabo nostrum, quam minima aspernatur at."
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
