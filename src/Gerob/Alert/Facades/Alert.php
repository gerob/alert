<?php namespace Gerob\Alert\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    /**
     * Get the registered name of our package
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'alert'; }

}
