<?php

namespace Leon\Devpack\Facades;

use Illuminate\Support\Facades\Facade;

class Devpack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'devpack';
    }
}
