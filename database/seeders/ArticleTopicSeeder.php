<?php

namespace Database\Seeders;

use App\Models\article;
use App\Models\topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_topic')->insert([
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
            [
                'article_id' => Article::inRandomOrder()->first()->id,
                'topic_id' => Topic::inRandomOrder()->first()->id,
            ],
        ]);
    }
}