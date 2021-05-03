<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clientes = Cliente::All("id");
        return [
            //
            'fecha'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'precio'=>$this->faker->numberBetween($min = 5, $max = 350),
            'cliente'=>$this->faker->randomElement($clientes)
        ];
    }
}
