<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Adji Pratama",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimos. Vel, quos consectetur neque rem repellat, fugiat maxime voluptatibus nobis eos dolorum est"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Andika Kurniawan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimos. Vel, quos consectetur neque rem repellat, fugiat maxime voluptatibus nobis eos dolorum est"
        ],
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
