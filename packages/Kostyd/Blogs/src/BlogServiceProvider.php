<?php

namespace KostyD\Blogs;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Kostyd\Blogs\View\Components\CategoryComponent;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // -- routes --
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // -- database --
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');


        // -- views --
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blogs');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/blogs'),
        ]);

        // -- components --
        Blade::component(\Kostyd\Blogs\View\Components\CategoryComponent::class, 'category-panel');
        Blade::component(\Kostyd\Blogs\View\Components\PostComponent::class, 'post');
        Blade::component(\Kostyd\Blogs\View\Components\BlogComponent::class, 'blog');


    }
}
