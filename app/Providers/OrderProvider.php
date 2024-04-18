<?php

namespace App\Providers;

use App\Services\OrderService;
use App\Services\TripService;
use Illuminate\Support\ServiceProvider;

class OrderProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\OrderService.php', function ($app) {
            return new OrderService();
        });
    }
}
