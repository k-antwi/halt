<?php

namespace KAntwi\Halt;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KAntwi\Halt\Skeleton\SkeletonClass
 */
class HaltFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'halt';
    }
}
