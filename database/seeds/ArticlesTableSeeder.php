<?php

use Illuminate\Database\Seeder;

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
        $limit = 30;

        for ($i=0; $i < $limit; $i++) {

        	DB::table('articles')->insert([
        		'title' => $faker->realText($maxNbChars=20, $indexSize = 1), 
        		'caption' => $faker->realText($maxNbChars=40, $indexSize = 1),
        		'banner_image' => $faker->imageUrl($width = 640, $height = 360),
        		'content' => $faker->realText($maxNbChars = 150, $indexSize = 1),
        		'publish_date' => $faker ->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        		'article_views' => $faker ->numberBetween($min = 1, $max = 200),
        	]);
        }
    }
}
