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
use App\Repositories\admin\mainOption\MainOptionAdminInterface;
use App\Repositories\admin\mainOption\MainOptionAdminRepository;
use App\Repositories\admin\valueOption\ValueOptionAdminInterface;
use App\Repositories\admin\valueOption\ValueOptionAdminRepository;

//User
use App\Repositories\user\auth\AuthUserInterface;
use App\Repositories\user\auth\AuthUserRepository;

// client
use App\Repositories\user\client\dashboard\DashboardClientUserInterface;
use App\Repositories\user\client\dashboard\DashboardClientUserRepository;
use App\Repositories\user\client\profile\ProfileClientUserInterface;
use App\Repositories\user\client\profile\ProfileClientUserRepository;
use App\Repositories\user\client\order\OrderClientUserInterface;
use App\Repositories\user\client\order\OrderClientUserRepository;
use App\Repositories\user\client\myorder\MyOrderClientUserInterface;
use App\Repositories\user\client\myorder\MyOrderClientUserRepository;
//creator
use App\Repositories\user\client\search\SearchClientUserInterface;
use App\Repositories\user\client\search\SearchClientUserRepository;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserInterface;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserRepository;
use App\Repositories\user\creator\profile\ProfileCreatorUserInterface;
use App\Repositories\user\creator\profile\ProfileCreatorUserRepository;
use App\Repositories\user\creator\offers\OffersCreatorUserInterface;
use App\Repositories\user\creator\offers\OffersCreatorUserRepository;


// website
use App\Repositories\website\pages\PagesInterface;
use App\Repositories\website\pages\PagesRepository;

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
        // MainOption
        $this->app->bind(
            MainOptionAdminInterface::class,
            MainOptionAdminRepository::class
        );

        // ValueOption
        $this->app->bind(
            ValueOptionAdminInterface::class,
            ValueOptionAdminRepository::class
        );

        //AUTH
        $this->app->bind(
            AuthUserInterface::class,
            AuthUserRepository::class
        );
        //Creator-----------------------------------------------
        $this->app->bind(
            DashboardCreatorUserInterface::class,
            DashboardCreatorUserRepository::class
        );
        // Profile
        $this->app->bind(
            ProfileCreatorUserInterface::class,
            ProfileCreatorUserRepository::class
        );
        // Offers
        $this->app->bind(
            OffersCreatorUserInterface::class,
            OffersCreatorUserRepository::class
        );
        //Client------------------------------------------------
        $this->app->bind(
            DashboardClientUserInterface::class,
            DashboardClientUserRepository::class
        );
        // Profile
        $this->app->bind(
            ProfileClientUserInterface::class,
            ProfileClientUserRepository::class
        );
        // Search
        $this->app->bind(
            SearchClientUserInterface::class,
            SearchClientUserRepository::class
        );
        //order
        $this->app->bind(
            OrderClientUserInterface::class,
            OrderClientUserRepository::class
        );

        //myorder
        $this->app->bind(
            MyOrderClientUserInterface::class,
            MyOrderClientUserRepository::class
        );

        // --------------------------------------------------website
        // pages
        $this->app->bind(
            PagesInterface::class,
            PagesRepository::class
        );

    }
}
