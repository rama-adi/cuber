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
        $categories = [
            [
                'assignable' => false,
                'name' => 'Informasi',
                'description' => 'Informasi OFFICIAL dari admin CUBER.'
            ],
            [
                'name' => 'Curhat',
                'description' => 'Ada yang mengganjal tapi tidak tau mau cerita dimana? Disini tempatnya. Anonim lho!'
            ],
            [
                'name' => 'Diskusi',
                'description' => 'Mulai pembicaraan disini, yang topiknya bukan curhat'
            ],
            [
                'name' => 'Minta rekomendasi',
                'description' => 'Mencari atau memberi rekomendasi film? buku? musik? buat postingan disini aja!'
            ],
            [
                'name' => 'Motivasi',
                'description' => 'Motivasi member lain disini. Atau baca motivasi dari member lain'
            ],
            [
                'name' => 'Saran utk CUBER',
                'description' => 'Punya saran? buat thread disini!'
            ]
        ];

        foreach ($categories as $category) ThreadCategory::create($category);
    }
}
