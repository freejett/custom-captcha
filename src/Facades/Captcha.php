<?php

namespace FreeJett\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FreeJett\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
