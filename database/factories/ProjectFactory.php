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
            "title" => $this->faker->sentence(mt_rand(2,8)), 
            "slug" => $this->faker->slug(),
            "status_project" => "Perencanaan",
            "nama_petani" => $this->faker->name(),
            "dana_terkumpul" => 3000000,
            "target_pendanaan" => 100000000,
            "excerpt" => $this->faker->paragraph(1),
            "deskripsi_project" => $this->faker->paragraph(3)
        ];
    }
}