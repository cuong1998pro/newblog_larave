<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        for($i=0; $i<10;$i++){
            $faker = Factory::create();
            $date = date('Y-m-d H:i:s');
            $image = "images/blog-banner/".rand(1,6).".jpg";
            $post[] = [
                'author_id' => rand(1, 2),
                'title' => $faker->sentence(rand(8, 12)),
                'excerpt' => $faker->text(rand(250, 300)),
                'body' => $faker->paragraph(rand(10, 15), true),
                'slug' => $faker->slug().rand(1,100),
                'image' =>  $image,
                'created_at' => $date,
                'updated_at' => $date,

            ];

        }
        DB::table('posts')->insert($post);

    }
}
