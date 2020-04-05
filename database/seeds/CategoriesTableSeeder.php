<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert(
            [
                [
                    'title' => 'Lập trình',
                    'slug' => 'lap-trinh'
                ],
                [
                    'title' => 'Hướng dẫn bỏ túi',
                    'slug' => 'huong-dan-bo-tui'
                ],
                [
                    'title' => 'Tài liệu - đề cương',
                    'slug' => 'tai-lieu-de-cuong'
                ],
            ]
        );

        
    }
}
