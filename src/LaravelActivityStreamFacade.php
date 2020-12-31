<?php

namespace Sicsol\LaravelActivityStream;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sicsol\LaravelActivityStream\Skeleton\SkeletonClass
 */
class LaravelActivityStreamFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-activity-stream';
    }
}
