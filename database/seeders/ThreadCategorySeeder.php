<?php

namespace Database\Seeders;

use App\Models\ThreadCategory;
use Illuminate\Database\Seeder;

class ThreadCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThreadCategory::factory(5)->create();
    }
}
