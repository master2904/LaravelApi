<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'cliente_id' => $this->faker->numberBetween(1,20),
            'forma_pago' => $this->faker->randomElement(['Efectivo','QR','Transaccion']),
            'pago' => $this->faker->numberBetween(20,50),
            'fecha' => $this->faker->date()
        ];
    }
}
