<?php
/**
 * Created by PhpStorm.
 * User: lyal
 * Date: 10/10/17
 * Time: 7:14 PM.
 */

namespace Lyal\Checkr\Laravel\Facades;

class Checkr extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lyal.checkr';
    }
}
