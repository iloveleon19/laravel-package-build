<?php
namespace KeJyun\Larapack\Facades;

use Illuminate\Support\Facades\Facade;

class Larapack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larapack';
    }
}