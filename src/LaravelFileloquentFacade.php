<?php

namespace Wulfheart\LaravelFileloquent;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wulfheart\LaravelFileloquent\Skeleton\SkeletonClass
 */
class LaravelFileloquentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-fileloquent';
    }
}
