<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Moch Rizky Arrasyid',
            'username' => 'masacid',
            'email' => 'mochrizkyarrasyid@gmail.com',
            'password' => bcrypt('masacid')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-Programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-Design'
        ]);
        

        Post::factory(20)->create();
    }

    
}
