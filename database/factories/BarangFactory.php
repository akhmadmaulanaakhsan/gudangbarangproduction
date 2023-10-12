<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;

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
    protected $model = Barang::class;

    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 10, 100),
            'stok' => $this->faker->numberBetween(1, 100),
            'id_supplier' => $this->faker->numberBetween(1000, 99999),
        ];
    }
}
