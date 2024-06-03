<?php

use Illuminate\Database\QueryException;
use PartridgeRocks\LaraCards\Models\Card;
use PartridgeRocks\LaraCards\Models\Suit;

it('can be created with factory', function () {
    $card = Card::factory()->create();
    expect($card)->toBeInstanceOf(Card::class);
});

it('has a suit, which is created with factory', function () {
    $card = Card::factory()->create();
    $suit = $card->suit;
    expect($suit)->toBeInstanceOf(Suit::class);
});

it('must be unique', function () {
    $card = Card::factory()->create();

    // Wrap the code in a try-catch block to catch the expected exception
    try {
        Card::factory()->create([
            'rank' => $card->rank,
            'suit_id' => $card->suit_id,
        ]);
        $this->fail('Expected exception not thrown');
    } catch (QueryException $e) {
        // Assert the exception message if needed
        expect($e->getMessage())->toContain('UNIQUE constraint failed');
    }
});
