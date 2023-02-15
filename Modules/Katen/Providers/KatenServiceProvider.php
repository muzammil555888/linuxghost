<?php

namespace Modules\Katen\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\Blog\Database\Models\Category;
use Modules\Blog\Database\Models\Post;

class KatenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'katen');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Navbar categories
        View::composer('katen::partial.navbar', function ($view) {
            $view->with('blog_categories', Category::where('is_published', true)
                                        ->where('category_id', null)
                                        ->orderBy('is_featured')
                                        ->get());
        });

        // Home page hero section posts
        View::composer('katen::partial.hero', function ($view) {
            $view->with([
                'featured_post' => Post::where('is_featured', true)
                                        ->where('is_published', true)
                                        ->first(),
                'latest_posts'   => Post::where('is_published', true)
                                        ->limit(4)
                                        ->latest()
                                        ->get(),
            ]);
        });
    }
}
