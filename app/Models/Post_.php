<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Buyung Abimanyu",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae totam natus quidem? Nihil rerum, praesentium vitae alias error nostrum ipsa similique placeat adipisci laudantium doloribus earum blanditiis velit repellendus aperiam? Voluptas natus ipsam quaerat asperiores minus, consequatur porro? Ab itaque quia, nemo voluptatibus necessitatibus similique veritatis optio! Ullam earum excepturi velit odio magnam quaerat ex, maiores, numquam dignissimos corrupti natus itaque assumenda incidunt exercitationem adipisci placeat voluptatum nam aliquam enim! Suscipit praesentium officia molestias aspernatur dolorem, deleniti quo nostrum qui."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ramadhan Shaleh",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe fugit blanditiis animi distinctio tenetur, minus optio sapiente. Laudantium corrupti distinctio alias cupiditate eius inventore perspiciatis velit dignissimos ad doloremque et suscipit eum quasi adipisci aliquid aperiam repudiandae nobis sapiente sequi aliquam minima ullam tenetur, non incidunt. Rem tempore veniam hic autem! Necessitatibus libero harum optio error impedit autem perspiciatis mollitia saepe, neque eum, minima molestiae illo ipsam consequuntur corporis doloremque sit dignissimos expedita nisi consequatur temporibus animi. Maiores expedita et error ullam quam qui minus officia corrupti aut provident sunt harum, nesciunt quidem porro! Vitae repellat cupiditate possimus nisi sint."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach( $posts as $p ){
        //     if( $p['slug'] === $slug ){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere( 'slug', $slug );

    }

}
