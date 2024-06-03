<?php

namespace PartridgeRocks\LaraCards\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suit extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The cards that belong to the suit.
     */
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
