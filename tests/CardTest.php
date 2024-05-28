<?php

use PartridgeRocks\LaraCards\Models\Card;

it('can be created with Model', function () {
    $card = Card::factory()->create();
    expect($card)->toBeInstanceOf(Card::class);
});
