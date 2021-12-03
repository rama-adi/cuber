<?php

namespace Database\Factories;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thread_id' => Thread::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
            'content' => $this->faker->realText(100)
        ];
    }
}
