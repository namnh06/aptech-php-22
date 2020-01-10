<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            // QUERY BUILDER
            // DB::table('posts')->insert([
            //     'title' => $title,
            //     'slug' => str_replace(" ", "-", $title),
            //     'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            //     'content' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true)
            // ]);

            // INSERT 
            // $post = new Post;
            // $post->title = $title;
            // $post->slug = str_replace(" ", "-", $title);
            // $post->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            // $post->content = $faker->paragraph($nbSentences = 10, $variableNbSentences = true);
            // $post->save();

            // CREATE
            Post::create([
                'title' => $title,
                'slug' => str_replace(" ", "-", $title),
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'content' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true)
            ]);
        }
    }
}