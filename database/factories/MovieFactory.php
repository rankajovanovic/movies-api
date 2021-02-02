<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->sentence($nbWords = 3, $variableNbWords = true), 
            'director' =>  $this->faker->name, 
            'imageUrl'  =>  $this->faker->url, 
            'duration'  =>  $this->faker->numberBetween($min = 60, $max = 240), 
            'releaseDate'  =>  $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'genre'  =>  $this->faker->word
        ];
    }
}
