<?php

namespace App\Providers;

use App\Repository\BaseRepositoryInterface;
use App\Repository\EmployeeRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use App\Repository\InstructorRepositoryInterface;
use App\Repository\InstrumentRepositoryInterface;
use App\Repository\StudentRepositoryInterface;

use App\Repository\Implement\BaseRepository;
use App\Repository\Implement\EmployeeRepository;
use App\Repository\Implement\InstructorRepository;
use App\Repository\Implement\InstrumentRepository;
use App\Repository\Implement\StudentRepository;
use App\Repository\Implement\UserRepository;

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
        $this->app->bind(InstructorRepositoryInterface::class, InstructorRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
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
