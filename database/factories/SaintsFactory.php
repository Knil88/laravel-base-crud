<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saint>
 */
class SaintsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->firstNameMale(),
            'date_of_birth'=>fake()->dateTime(),
            'city_of_birth'=>fake()->city(),
            'miracles'=>fake()->numberBetween(5,50),

        ];
    }
}
