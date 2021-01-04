<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Code;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $code = Code::factory()->count(20)->create();
    }
}
