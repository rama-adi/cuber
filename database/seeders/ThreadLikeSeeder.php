<?php

namespace Database\Seeders;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Seeder;

class ThreadLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = Thread::all();

        User::all()->each(function ($user) use ($threads) {
            $user->threadLike()->saveMany($threads);
        });
    }
}
