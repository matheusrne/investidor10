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

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            \App\Interfaces\NewsRepositoryInterface::class,
            \App\Repositories\NewsRepository::class
        );

        $this->app->bind(
            \App\Interfaces\NewsServiceInterface::class,
            \App\Services\NewsService::class
        );

        $this->app->bind(
            \App\Interfaces\CategoriesServiceInterface::class,
            \App\Services\CategoriesService::class
        );

        $this->app->bind(
            \App\Interfaces\CategoriesRepositoryInterface::class,
            \App\Repositories\CategoriesRepository::class
        );
    }
}
