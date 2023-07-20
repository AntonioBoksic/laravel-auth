<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> word(),
            'programming_language' => fake() ->randomElements(['Javascript', 'Vue', 'PHP', 'Laravel', 'Java', 'Flutter', ''], 3),
            'description' => fake() -> paragraph(20),
            'device' => fake() -> randomElements(['IOS', 'Android', 'Desktop', 'd', 'e'], 3),
        ];
    }
}
