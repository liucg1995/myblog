<?php
/**
 * Created by PhpStorm.
 * User: we-te
 * Date: 2017/6/7
 * Time: 17:25
 */

namespace App\Providers;

use IlluminateSupportSeriveProvider;

class BlogSerivePrivider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('App\Repositories\RepositoryInterface', 'App\Repositories\Repository');
    }
}