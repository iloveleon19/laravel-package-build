<?php

namespace KeJyun\Larapack;

use Illuminate\Support\Facades\Facade;

class LarapackFacade extends Facade
{
    protected static function getFacedeAccessor()
    {
        return 'larapack';
    }
}