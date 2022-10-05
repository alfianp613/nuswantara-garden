<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "petaniid" => 3,
            "title" => $this->faker->sentence(mt_rand(2,8)), 
            "slug" => $this->faker->slug(),
            "status_project" => "Perencanaan",
            "dana_terkumpul" => 3000000,
            "target_pendanaan" => 100000000,
            "excerpt" => $this->faker->paragraph(5),
            "deskripsi_project" => $this->faker->paragraph(20)
        ];
    }
}