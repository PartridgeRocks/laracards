<?php

namespace PartridgeRocks\LaraCards\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PartridgeRocks\LaraCards\Models\Suit;

class SuitFactory extends Factory
{
    protected $model = Suit::class;

    public function definition(): array
    {
        return [
            'name' => 'Hearts',
            'color' => 'Red',
            'symbol' => '♥',
        ];
    }
}
