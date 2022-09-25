<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->unique()->word(10),
            'jumlah' => $this->faker->randomElement([10,20,30]),
            'keterangan'=> $this->faker->randomElement(['Tersedia','Sedang Dipesan','Tidak Ada']),
            'jenis' =>$this->faker->randomElement(['Dasar','Menengah','Lanjut']),
        ];
    }
}
