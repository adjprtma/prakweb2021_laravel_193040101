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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adji Pratama",
        "email" => "adjipratama28@gmail.com",
        "image" => "adji.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});