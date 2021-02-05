<?php
namespace KeJyun\Larapack\Facades;

use Illuminate\Support\Facades\Facade;

class LarapackFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larapack';
    }
}