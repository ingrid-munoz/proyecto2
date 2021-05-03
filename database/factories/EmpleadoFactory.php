<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estudios = ["Secundaria","Grado medio","Bachiller","Grado superior","Uni"];
        return [
            //
            'nombre'=>$this->faker->name,
            'telefono'=>$this->faker->phoneNumber,
            'direccion'=>$this->faker->address,
            'estudios'=>$this->faker->randomElement($estudios)
            // --------------------------------------------------
            //'estudios'=>$this->faker->randomElement(["Secundaria","Grado medio","Bachiller","Grado superior","Uni"])
        ];
    }
}
