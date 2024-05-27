<?php namespace App\Providers;

//Admin
use App\Repositories\admin\auth\AuthAdminInterface;
use App\Repositories\admin\auth\AuthAdminRepository;
use App\Repositories\admin\dashboard\DashboardAdminInterface;
use App\Repositories\admin\dashboard\DashboardAdminRepository;
use App\Repositories\admin\role\RoleAdminInterface;
use App\Repositories\admin\role\RoleAdminRepository;
use App\Repositories\admin\user\UserAdminInterface;
use App\Repositories\admin\user\UserAdminRepository;

//User
use App\Repositories\user\auth\AuthUserInterface;
use App\Repositories\user\auth\AuthUserRepository;


// creator
use App\Repositories\user\creator\dashboard\DashboardCreatorUserInterface;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserRepository;

// client
use App\Repositories\user\client\dashboard\DashboardClientUserInterface;
use App\Repositories\user\client\dashboard\DashboardClientUserRepository;

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
        // role
        $this->app->bind(
            RoleAdminInterface::class,
            RoleAdminRepository::class
        );
        // user
        $this->app->bind(
            UserAdminInterface::class,
            UserAdminRepository::class
        );

        //User
        $this->app->bind(
            AuthUserInterface::class,
            AuthUserRepository::class
        );
        //Creator
        $this->app->bind(
            DashboardCreatorUserInterface::class,
            DashboardCreatorUserRepository::class
        );

        //Client
        $this->app->bind(
            DashboardClientUserInterface::class,
            DashboardClientUserRepository::class
        );


    }
}
