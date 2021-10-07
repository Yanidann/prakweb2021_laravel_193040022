<?php

use Illuminate\Routing\Router;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yanida Nur Nabila",
        "email" => "193040022.yanida@mail.unpas.ac.id",
        "image" => "yanida.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
