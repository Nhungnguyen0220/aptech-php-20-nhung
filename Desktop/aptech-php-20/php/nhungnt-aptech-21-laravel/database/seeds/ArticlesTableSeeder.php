<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Article::insert([
                'title' => $faker->realText(100),
                'title_slug' => $faker->realText(100),
                'description' => $faker->realText(200),
                'content' => $faker->randomHtml()
            ]);
        }
    }
}
