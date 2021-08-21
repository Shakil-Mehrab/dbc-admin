<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::all()->random()->id;
            },
            'kicker' => $this->faker->word,
            'headline' => $name = $this->faker->sentence,
            'slug' => Str::slug($name),
            'teaser' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'publisher_id' => 1,
        ];
    }
}