<?php

namespace Database\Factories;

use App\Models\ThreadCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $threadTitle = $this->faker->realTextBetween(10, 255);

        return [
            'user_id' => User::inRandomOrder()->first(),
            'title' => $threadTitle,
            'slug' => Str::threadLink($threadTitle),
            'thread_category_id' => ThreadCategory::inRandomOrder()->first(),
            'content' => $this->faker->realText(500),
        ];
    }
}
