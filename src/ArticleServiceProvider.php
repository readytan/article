<?php

namespace Readytan\Article;

use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {



//
        $this->publishes([ __DIR__.'/../public/assets' => public_path('vendor/readytan/article/assets')],'article_assets');
        $this->publishes([__DIR__.'/../config/article.php' => config_path('article.php')],'article_config');
        $this->publishes([ __DIR__.'/../database/migrations/' => database_path('migrations')], 'article_migrations');
        $this->publishes([ __DIR__.'/../database/seeds/' => database_path('seeds')], 'article_seeds');

        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views','article');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
//        $command=new Command();
//        $command->call('migrate');
    }
}
