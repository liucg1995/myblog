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


        View::composer('part.category', 'App\Http\ViewComposers\CategoriesComposer');
        View::composer('part.commentpost', 'App\Http\ViewComposers\CommentComposer');

        View::composer('part.link', 'App\Http\ViewComposers\LinkComposer');
        View::composer('part.menu', 'App\Http\ViewComposers\MenuComposer');

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
