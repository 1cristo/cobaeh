<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding nodel.
     *
     * @var string
     */
    protected $model = Category::class;

     /**
     * @return array
     */
    public function definition()
    {
        //Hola mundo como estas // este es un ejemplo de un slug esto le quita espasio y los pone cmo guiones medios.
        //hola-mundo-como estas // <- asi quedaria

        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
