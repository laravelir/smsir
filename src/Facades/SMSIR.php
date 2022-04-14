<?php

namespace Laravelir\SMSIR\Facades;

use Illuminate\Support\Facades\Facade;

class SMSIR extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsir';
    }
}
