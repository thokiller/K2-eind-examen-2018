<?php

namespace App\Providers;

use App\Services\TripService;
use Illuminate\Support\ServiceProvider;

class TripProvider extends ServiceProvider
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
        $this->app->bind('App\Services\TripService.php', function ($app) {
            return new TripService();
        });
    }
}
