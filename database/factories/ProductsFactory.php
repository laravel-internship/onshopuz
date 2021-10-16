<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = \Str::slug($name);
        $price = $this->faker->numberBetween(1000, 100000000);
        $quentity = $this->faker->numberBetween(1, 1000);
        $image = $this->faker->imageUrl(300, 300);
        $status = $this->faker->numberBetween(0, 1);
        $data = ['Name' => $name, 'Price' => $price];
        return [
            'name' => $name,
            'price' => $price,
            'quentity' => $quentity,
            'image' => $image,
            'images' => $image,
            'status' => $status,
            'data' => $data,
            'slug' => $slug
        ];
    }
}
