<?php

namespace Awcodes\Dimmer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Awcodes\Dimmer\Dimmer
 */
class Dimmer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Awcodes\Dimmer\Dimmer::class;
    }
}
