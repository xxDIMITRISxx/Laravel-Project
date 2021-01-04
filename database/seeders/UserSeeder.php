<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Code;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> username = 'ADMIN';
        $user -> email = 'admin0000@gmail.com';
        $user -> password = bcrypt('impossibletocrack:)');
        $user -> adminRole = 1;
        $user -> save();
        $user->code()->save(new Code);
      

        $users = User::factory()->count(20)->create();
        
    }
}
