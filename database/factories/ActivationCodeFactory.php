<?php

namespace Database\Factories;

use App\Models\ActivationCode;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivationCodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ActivationCode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'activation_code' => 'orospu',
            'email' => 'can@can.com',
        ];
    }
}
