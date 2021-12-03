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
        User::factory(3)->create();

        User::create([
            'name' => 'Hari Santoso',
            'username' => 'Santoso',
            'email' => 'santoso.hr@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // User::create([
        //     'name' => 'Arif Gunawan',
        //     'email' => 'arif@gmail.com',
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
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque explicabo eos nesciunt consequatur nostrum, dolorum deserunt nulla quos iusto id error incidunt laboriosam minima sunt, excepturi laudantium cumque numquam odio repellendus blanditiis fugiat! Officiis tempora repudiandae amet animi minima maiores.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque explicabo eos nesciunt consequatur nostrum, dolorum deserunt nulla quos iusto id error incidunt laboriosam minima sunt, excepturi laudantium cumque numquam odio repellendus blanditiis fugiat! Officiis tempora repudiandae amet animi minima maiores.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque explicabo eos nesciunt consequatur nostrum, dolorum deserunt nulla quos iusto id error incidunt laboriosam minima sunt, excepturi laudantium cumque numquam odio repellendus blanditiis fugiat! Officiis tempora repudiandae amet animi minima maiores.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque explicabo eos nesciunt consequatur nostrum, dolorum deserunt nulla quos iusto id error incidunt laboriosam minima sunt, excepturi laudantium cumque numquam odio repellendus blanditiis fugiat! Officiis tempora repudiandae amet animi minima maiores.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
