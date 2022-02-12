<?php

namespace nera\SimpleNavigation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \nera\SimpleNavigation\SimpleNavigation
 */
class SimpleNavigation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simple-navigation';
    }
}
