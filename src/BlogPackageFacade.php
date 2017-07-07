<?php


namespace laravel_team\Blogpackage;
use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: tapos
 * Date: 7/8/2017
 * Time: 12:15 AM
 */
class BlogPackageFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'blog-package';
    }
}