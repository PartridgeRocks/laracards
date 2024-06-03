<?php

namespace PartridgeRocks\LaraCards\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The suit that the card belongs to.
     */
    public function suit(): BelongsTo
    {
        return $this->belongsTo(Suit::class);
    }
}
