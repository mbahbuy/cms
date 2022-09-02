<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
            'name' => 'Buyung Abimanyu',
            'username' => 'buyungabimanyu',
            'email' => 'buyung@gmail.com',
            'password' => bcrypt('buyung24')
        ]);

        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'M. Galuh Setiawan',
        //     'email' => 'galuh@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quos non aliquam! Incidunt, blanditiis corrupti? Fuga sit quasi animi rerum mollitia explicabo, fugit laudantium magni architecto vitae illum totam ad?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, rerum ab pariatur hic est consequuntur corrupti odit? Esse similique, eos aut nam animi provident laudantium quo vitae consectetur magnam deserunt, dignissimos a corrupti quasi rem ullam dolores suscipit consequuntur obcaecati doloremque perspiciatis reprehenderit ducimus vel! Quibusdam, aliquid nobis odio natus tempora vero architecto perferendis quisquam quos cum laboriosam. Incidunt tempora illo exercitationem temporibus laborum deserunt, eum hic ab labore illum minima saepe, natus corporis consequatur praesentium ut voluptates aspernatur. Culpa omnis voluptas odit sequi facilis officia quo veniam inventore, voluptatum expedita quia iste fuga, vero similique autem deserunt magnam ad!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quos non aliquam! Incidunt, blanditiis corrupti? Fuga sit quasi animi rerum mollitia explicabo, fugit laudantium magni architecto vitae illum totam ad?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, rerum ab pariatur hic est consequuntur corrupti odit? Esse similique, eos aut nam animi provident laudantium quo vitae consectetur magnam deserunt, dignissimos a corrupti quasi rem ullam dolores suscipit consequuntur obcaecati doloremque perspiciatis reprehenderit ducimus vel! Quibusdam, aliquid nobis odio natus tempora vero architecto perferendis quisquam quos cum laboriosam. Incidunt tempora illo exercitationem temporibus laborum deserunt, eum hic ab labore illum minima saepe, natus corporis consequatur praesentium ut voluptates aspernatur. Culpa omnis voluptas odit sequi facilis officia quo veniam inventore, voluptatum expedita quia iste fuga, vero similique autem deserunt magnam ad!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quos non aliquam! Incidunt, blanditiis corrupti? Fuga sit quasi animi rerum mollitia explicabo, fugit laudantium magni architecto vitae illum totam ad?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, rerum ab pariatur hic est consequuntur corrupti odit? Esse similique, eos aut nam animi provident laudantium quo vitae consectetur magnam deserunt, dignissimos a corrupti quasi rem ullam dolores suscipit consequuntur obcaecati doloremque perspiciatis reprehenderit ducimus vel! Quibusdam, aliquid nobis odio natus tempora vero architecto perferendis quisquam quos cum laboriosam. Incidunt tempora illo exercitationem temporibus laborum deserunt, eum hic ab labore illum minima saepe, natus corporis consequatur praesentium ut voluptates aspernatur. Culpa omnis voluptas odit sequi facilis officia quo veniam inventore, voluptatum expedita quia iste fuga, vero similique autem deserunt magnam ad!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quos non aliquam! Incidunt, blanditiis corrupti? Fuga sit quasi animi rerum mollitia explicabo, fugit laudantium magni architecto vitae illum totam ad?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, rerum ab pariatur hic est consequuntur corrupti odit? Esse similique, eos aut nam animi provident laudantium quo vitae consectetur magnam deserunt, dignissimos a corrupti quasi rem ullam dolores suscipit consequuntur obcaecati doloremque perspiciatis reprehenderit ducimus vel! Quibusdam, aliquid nobis odio natus tempora vero architecto perferendis quisquam quos cum laboriosam. Incidunt tempora illo exercitationem temporibus laborum deserunt, eum hic ab labore illum minima saepe, natus corporis consequatur praesentium ut voluptates aspernatur. Culpa omnis voluptas odit sequi facilis officia quo veniam inventore, voluptatum expedita quia iste fuga, vero similique autem deserunt magnam ad!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
