<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->call(ProfileSeeder::class);
          //  $this->call(PostSeeder::class);

            \App\Models\Post::factory(3)
            ->has(\App\Models\Comment::factory()->count(3))
            ->create();
    }
}
