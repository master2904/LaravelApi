<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->word(),
            'imagen'=>'',
            'cantidad_minima'=>$this->faker->numberBetween(2,10),
            'stock'=>$this->faker->numberBetween(2,5),
            'precio_compra'=>$this->faker->numberBetween(20,50),
            'precio_venta'=>$this->faker->numberBetween(30,50),
            'categoria_id'=>$this->faker->numberBetween(1,20),
        ];
    }
}
