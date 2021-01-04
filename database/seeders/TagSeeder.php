<?php

namespace Database\Seeders;
use App\Models\Post;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::factory()->count(50)->create();

        foreach(\App\Models\Post::all() as $post){
            $post->tags()->attach(\App\Models\Tag::inRandomOrder()->first());
            //$post->tags()->attach(\App\Models\Tag::inRandomOrder()->first());
        }
    }
}
