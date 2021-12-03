<?php

namespace Database\Seeders;

use App\Models\ThreadReply;
use Illuminate\Database\Seeder;

class ThreadReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThreadReply::factory(50)->create();
    }
}
