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


    private $image_urls = [
        'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg',
        'https://m.media-amazon.com/images/I/51wILNNX2VL._SY445_.jpg',
        'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg',
        'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg'
    ];

    private $genres = [
        'action',
        'sci-fi',
        'comedy',
        'thriller',
        'documentary'
    ];
    /*
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4, true),
            'director' => $this->faker->name(),
            'image_url' => $this->faker->randomElement($this->image_urls),
            'duration' => $this->faker->numberBetween(10, 300),
            'release_date' => $this->faker->date(),
            'genre' => $this->faker->randomElement($this->genres),
        ];
    }
}
