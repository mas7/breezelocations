<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $locations = Location::pluck('id');
        return [
            'location_id' => $locations->shuffle()->first(),
            'amount' => rand(1000, 9999),
            'description' => $this->faker->text(50),
            'created_at' => now()->subSeconds(rand(3600, 100000)),
        ];
    }
}
