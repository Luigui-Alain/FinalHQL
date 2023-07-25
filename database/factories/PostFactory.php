<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition()
    {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'titulo' => $this->faker->sentence,
        'slug' => $this->faker->unique()->slug,
        'contenido' => $this->faker->text,
    ];
}
}
