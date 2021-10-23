<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->words($nb = 4, $asText = true);
        $about = $this->faker->unique()->words($nb = 10, $asText = true);
        $description = $this->faker->unique()->words($nb = 80, $asText = true);
        $slug = \Str::slug($name);
        $price = $this->faker->numberBetween(1000, 100000000);
        $quentity = $this->faker->numberBetween(1, 1000);
<<<<<<< HEAD
        $discount = $this->faker->numberBetween(1, 800);
        $category=$this->faker->numberBetween(1, 10);
=======
        $category_id = $this->faker->numberBetween(1, 10);
>>>>>>> 15c829fa3340994f1f072b16d33e5104f9178a29
        $image = $this->faker->imageUrl(300, 300);
        $status = $this->faker->numberBetween(0, 1);
        return [
            'name' => $name,
            'price' => $price,
            'quatity' => $quentity,
<<<<<<< HEAD
            'category_id'=>$category,
=======
            'category_id'=>$category_id,
>>>>>>> 15c829fa3340994f1f072b16d33e5104f9178a29
            'image' => $image,
            'images' => $image,
            'status' => $status,
            'data'=>$name,
            'discount'=>$discount,
            'about'=>$about,
            'description'=>$description,
            'slug' => $slug
        ];
    }
}
