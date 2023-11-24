<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categories = \App\Models\Category::all();
        view()->share('categories', $categories);
        $subcategories = \App\Models\Subcategory::all();
        view()->share('subcategories', $subcategories);
    }
}
