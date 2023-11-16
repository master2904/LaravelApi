<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaccion>
 */
class TransaccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto_id'=>$this->faker->numberBetween(1,10),
            'cantidad'=>$this->faker->numberBetween(1,10),
            'precio'=>$this->faker->numberBetween(20,30),
            'venta_id'=>$this->faker->numberBetween(1,15)
        ];
    }
}
