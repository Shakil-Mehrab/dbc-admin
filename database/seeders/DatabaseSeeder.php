<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create();
        // \App\Models\Article::factory(5)->create();
        // \App\Models\Category::factory(5)->create();
        // $this->call(ArticleCategorySeeder::class);
        // \App\Models\Topic::factory(5)->create();
        \App\Models\Tag::factory(5)->create();
        // $this->call(ArticleTopicSeeder::class);
    }
}