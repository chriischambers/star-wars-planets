<?php

namespace ChriisChambers\StarWarsPlanets\Facades;

use Illuminate\Support\Facades\Facade;

class StarWarsPlanet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'star-wars-planets';
    }
}
