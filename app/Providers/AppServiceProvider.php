<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        View::composer('part.categories', 'App\Http\ViewComposers\CategoriesComposer');

        View::composer('widget.hot_posts', 'App\Http\ViewComposers\HotPostsComposer');

        View::composer('part.tag', 'App\Http\ViewComposers\TagsComposer');

        View::composer(['index', 'layouts.header'], 'App\Http\ViewComposers\PagesComposer');

        View::composer('*', 'App\Http\ViewComposers\SettingsComposer');
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind('App\Repositories\RepositoryInterface', 'App\Repositories\Repository');
    }
}
