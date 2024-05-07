<?php

namespace App\Providers;

use App\Service\Auth\LoginService;
use App\Service\Auth\RegisterService;
use Illuminate\Support\ServiceProvider;
use App\Service\Interfaces\LoginServiceInterface;
use App\Service\Interfaces\RegisterServiceInterface;



class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(RegisterServiceInterface::class, RegisterService::class);
        $this->app->bind(LoginServiceInterface::class, LoginService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
