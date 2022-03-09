<?php

namespace App\Ship\Providers;

use App\Ship\Parents\Providers\MainProvider;
use App\Ship\Parents\Providers\RoutesProvider;


class ShipProvider extends MainProvider
{
    /**
     * Register any Service Providers on the Ship layer (including third party packages).
     */
    public array $serviceProviders = [
        RoutesProvider::class
    ];

    /**
     * Register any Alias on the Ship layer (including third party packages).
     */
    protected array $aliases = [];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        parent::register();
    }
}
