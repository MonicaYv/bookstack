<?php

namespace Database\Factories\Entities\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \BookStack\Entities\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $description = $this->faker->paragraph();
        return [
            'name'        => $this->faker->sentence(),
            'slug'        => Str::random(10),
            'description' => $description,
            'description_html' => '<p>' . e($description) . '</p>',
            'sort_rule_id' => null,
            'default_template_id' => null,
        ];
    }
}
