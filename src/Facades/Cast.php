<?php

namespace Howkins\Cast\Facades;

use Illuminate\Support\Facades\Facade;

class Cast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'cast'; }
}