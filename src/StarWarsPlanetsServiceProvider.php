<?php

namespace ChriisChambers\StarWarsPlanets;

use Illuminate\Support\ServiceProvider;

class StarWarsPlanetsServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('star-wars-planets', function() {
            return new PlanetFactory();
        });
    }
}