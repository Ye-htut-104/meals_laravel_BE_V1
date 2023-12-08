<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CategoryInterface;
use App\Repositories\CategoryRepository;
use App\Interfaces\ProductInterface;
use App\Repositories\ProductRepository;


class RepositoryServiceProvider extends ServiceProvider
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
        {
            $this->app->bind(CategoryInterface::class, CategoryRepository::class);
            $this->app->bind(ProductInterface::class, ProductRepository::class);

        }
        
    }
}
