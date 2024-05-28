<?php

namespace partridge-rocks\Laracards\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \partridge-rocks\Laracards\Laracards
 */
class Laracards extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \partridge-rocks\Laracards\Laracards::class;
    }
}
