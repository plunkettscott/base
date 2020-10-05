<?php

namespace Responseams\Base;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Responseams\Base\Skeleton\SkeletonClass
 */
class BaseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'base';
    }
}
