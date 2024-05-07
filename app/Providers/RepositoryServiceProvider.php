<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Auth\LoginRepository;
use App\Repository\Guest\CartRepository;
use App\Repository\Auth\RegisterationRepository;
use App\Repository\Interfaces\CartRepositoryInterface;
use App\Repository\Interfaces\LoginReposetoryInterface;
use App\Repository\Interfaces\RegisterReposetoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(RegisterReposetoryInterface::class, RegisterationRepository::class);
        $this->app->bind(LoginReposetoryInterface::class, LoginRepository::class);
        $this->app->bind(CartRepositoryInterface::class,CartRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
