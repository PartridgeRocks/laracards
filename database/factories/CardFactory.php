<?php

namespace PartridgeRocks\LaraCards\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PartridgeRocks\LaraCards\Models\Card;

class CardFactory extends Factory
{

    protected $model = Card::class;

    public function definition()
    {
        return [
            'rank' => 'A',
        ];
    }
}

