<?php

namespace App\Providers;

use App\Repository\BaseRepositoryInterface;
use App\Repository\EmployeeRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use App\Repository\Implement\BaseRepository;
use App\Repository\Implement\EmployeeRepository;
use App\Repository\Implement\InstrumentRepository;
use App\Repository\Implement\UserRepository;
use App\Repository\InstrumentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);
        $this->app->bind(InstrumentRepositoryInterface::class, InstrumentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
