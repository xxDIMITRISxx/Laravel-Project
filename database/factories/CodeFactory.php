<?php

namespace Database\Factories;

use App\Models\Code;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Code::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $count = 2;
        return [
            'code' => '@' . \App\Models\User::find($count)->username,

            'user_id' => \App\Models\User::find($count++)->id,
            
        ];
    }
}
