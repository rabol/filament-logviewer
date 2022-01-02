<?php

namespace Rabol\FilamentLogviewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rabol\FilamentLogviewer\FilamentLogviewer
 */
class FilamentLogviewer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-logviewer';
    }
}
