<?php

namespace Database\Factories;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Libro::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre del libro'=> $this->faker->streetName,
            'id autor'=>$this->faker->randomNumber($nbDigits=NULL, $strict=false),
            'precio de venta'=>$this->faker->numberBetween(100, 1000),
            'Tipo de libro'=>$this->faker->randomElement($array= array ('Romance','Comedia',' Literatura')),
        ];
    }
}
