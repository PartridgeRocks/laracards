<?php

namespace PartridgeRocks\LaraCards\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PartridgeRocks\LaraCards\Laracards
 */
class LaraCards extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PartridgeRocks\LaraCards\Laracards::class;
    }
}
