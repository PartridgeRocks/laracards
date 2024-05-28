<?php

namespace PartridgeRocks\LaraCards\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PartridgeRocks\LaraCards\LaraCards
 */
class LaraCards extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PartridgeRocks\LaraCards\LaraCards::class;
    }
}
