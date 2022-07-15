<?php

namespace Database\Factories;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Venta::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nombre Del Vendedor' => $this->faker->name(),
            'Nombre Del Cliente'=> $this->faker->name(),
            'Id Del Libro Vendido' => $this->faker->randomNumber($nbDigits=NULL, $strict=false),
            'Precio Del Libro' => $this->faker->numberBetween(300, 1000),
            'Foto' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
