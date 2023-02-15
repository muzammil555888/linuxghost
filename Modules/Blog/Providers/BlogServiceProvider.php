<?php

namespace Modules\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'blog');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations/');
        $this->app->make(\Composer\Autoload\ClassLoader::class)->addPsr4('Modules\\Blog\\Database\\Models\\', __DIR__ . '/../Database/Models');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
