<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition(): array
    {
        return [
            'nama' => fake() -> name(),
            'harga' => 'Rp. ' . fake() -> randomFloat(2, 10, 100), ',', '.',
            'stok' => fake() -> numberBetween(1, 100),
        ];
    }
}
