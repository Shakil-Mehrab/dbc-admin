<?php

namespace Database\Seeders;

use App\Models\article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_category')->insert([
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
        ]);
    }
}