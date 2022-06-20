<?php

namespace Reno\RecipeConversion\Facades;

use Illuminate\Support\Facades\Facade;

class RecipeConversion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'recipe-conversion';
    }
}
