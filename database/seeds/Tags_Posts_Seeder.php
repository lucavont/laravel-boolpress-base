<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Tag;

class Tags_Posts_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();
        $tags = Tag::all();
        //
        DB::table('tags_posts')->insert([
            'tag_id' => $faker->numberBetween(1, $tags->count()),
            'post_id' => $faker->numberBetween(1, $posts->count()),
            ]);

            
        foreach ($posts as $post) {

            for ($i = 1; $i <= $faker->numberBetween(1, $tags->count()); $i++) {

                DB::table('tags_posts')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $i

                ]);
            }
        }
    }
}
