<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Adent',
            'email' => 'adent@example.com',
            'password' => bcrypt('adent123')
        ]);

        User::create([
            'name' => 'Reena',
            'email' => 'reena@example.com',
            'password' => bcrypt('reena123')
        ]);

        Post::create([
            'caption' => 'bjir',
            'category_id' => 1,
            'user_id' =>1
        ]);

        Post::create([
            'caption' => 'wkwkkw',
            'category_id' => 1,
            'user_id' =>2
        ]);

        Post::create([
            'caption' => 'aga laen',
            'category_id' => 3,
            'user_id' =>1
        ]);

        Post::create([
            'caption' => 'ngakak brutal',
            'category_id' => 2,
            'user_id' =>2
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);

        Category::create([
            'name' => 'Anime',
            'slug' => 'anime',
        ]);
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
        ]);
        Category::create([
            'name' => 'Dark',
            'slug' => 'dark',
        ]);
        Category::create([
            'name' => 'Random',
            'slug' => 'random',
        ]);




    }
}
