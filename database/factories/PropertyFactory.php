<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb = 2, $asText = true);
        $name = $this->faker->unique()->words($nb = 4, $asText = true);
        $category_id = $this->faker->numberBetween(1, 10);
        return [
            'title'=> $title,
            'name'=> $name,
            'category_id'=> $category_id
        ];
    }
}
