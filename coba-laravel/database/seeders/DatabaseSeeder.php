<?php

namespace Database\Seeders;

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

        User::create([
           'name' => 'Adji Pratama',
           'username' => 'adjprtma',
           'email' => 'djitothebeat123@gmail.com',
           'password' => bcrypt('password')
        ]);

        //User::create([
        //    'name' => 'Rizal Muhaimin',
        //    'email' => 'imin28@gmail.com',
        //    'password' => bcrypt('12345')
        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quos voluptatum officiis alias veniam maxime aut voluptates odio dolorum id molestias recusandae nesciunt laudantium cupiditate at, est corrupti commodi, in repudiandae. Aspernatur nesciunt dignissimos voluptatum officia necessitatibus ab cumque eos optio earum alias, officiis magnam dolore nulla modi distinctio. Ipsa nesciunt assumenda officiis alias magni rerum maiores porro obcaecati, laboriosam earum odit, officia repudiandae, vitae quas dignissimo',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
