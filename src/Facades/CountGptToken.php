<?php

namespace ZohaibTariq\CountGptToken\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ZohaibTariq\CountGptToken\CountGptToken
 */
class CountGptToken extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ZohaibTariq\CountGptToken\CountGptToken::class;
    }
}
