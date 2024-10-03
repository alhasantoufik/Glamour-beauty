<?php

namespace App\Providers;

use App\Models\category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

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
        Paginator::useBootstrap();

        if (Schema::hasTable('categories')) 
        {
            $all_categories=category::all();
        }
        view()->share('categories',$all_categories);
    }
}
