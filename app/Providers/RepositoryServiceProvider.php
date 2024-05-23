<?php namespace App\Providers;

//Admin
use App\Repositories\admin\auth\AuthAdminInterface;
use App\Repositories\admin\auth\AuthAdminRepository;
use App\Repositories\admin\dashboard\DashboardAdminInterface;
use App\Repositories\admin\dashboard\DashboardAdminRepository;
use App\Repositories\admin\role\RoleAdminInterface;
use App\Repositories\admin\role\RoleAdminRepository;

//User
use App\Repositories\user\auth\AuthUserInterface;
use App\Repositories\user\auth\AuthUserRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // AuthAdmin
        $this->app->bind(
            AuthAdminInterface::class,
            AuthAdminRepository::class
        );
        // Dashboard
        $this->app->bind(
            DashboardAdminInterface::class,
            DashboardAdminRepository::class
        );
        $this->app->bind(
            RoleAdminInterface::class,
            RoleAdminRepository::class
        );

        //User
        $this->app->bind(
            AuthUserInterface::class,
            AuthUserRepository::class
        );


    }
}
