<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->unique()->address(),
            'telefono' => $this->faker->unique()->phoneNumber(),
            'fechanac' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years'),
            'inicio' => $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now'),
            'modalidad_id' => $this->faker->numberBetween(1, 34)
        ];
    }
}
