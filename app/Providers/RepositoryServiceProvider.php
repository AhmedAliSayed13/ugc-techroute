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
use App\Repositories\admin\order\OrderAdminInterface;
use App\Repositories\admin\order\OrderAdminRepository;
use App\Repositories\admin\transaction\TransactionAdminInterface;
use App\Repositories\admin\transaction\TransactionAdminRepository;

//User
use App\Repositories\user\auth\AuthUserInterface;
use App\Repositories\user\auth\AuthUserRepository;
use App\Repositories\user\forgot_password\ForgotPasswordUserInterface;
use App\Repositories\user\forgot_password\ForgotPasswordUserRepository;

// client
use App\Repositories\user\client\dashboard\DashboardClientUserInterface;
use App\Repositories\user\client\dashboard\DashboardClientUserRepository;
use App\Repositories\user\client\profile\ProfileClientUserInterface;
use App\Repositories\user\client\profile\ProfileClientUserRepository;
use App\Repositories\user\client\order\OrderClientUserInterface;
use App\Repositories\user\client\order\OrderClientUserRepository;
use App\Repositories\user\client\myorder\MyOrderClientUserInterface;
use App\Repositories\user\client\myorder\MyOrderClientUserRepository;
use App\Repositories\user\client\chat\ChatClientUserInterface;
use App\Repositories\user\client\chat\ChatClientUserRepository;
use App\Repositories\user\client\features\FeaturesClientUserInterface;
use App\Repositories\user\client\features\FeaturesClientUserRepository;
use App\Repositories\user\client\shipping\ShippingsClientUserInterface;
use App\Repositories\user\client\shipping\ShippingsClientUserRepository;
use App\Repositories\user\client\wallet\WalletClientUserInterface;
use App\Repositories\user\client\wallet\WalletClientUserRepository;
//creator
use App\Repositories\user\client\search\SearchClientUserInterface;
use App\Repositories\user\client\search\SearchClientUserRepository;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserInterface;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserRepository;
use App\Repositories\user\creator\profile\ProfileCreatorUserInterface;
use App\Repositories\user\creator\profile\ProfileCreatorUserRepository;
use App\Repositories\user\creator\offers\OffersCreatorUserInterface;
use App\Repositories\user\creator\offers\OffersCreatorUserRepository;
use App\Repositories\user\creator\tasks\TasksCreatorUserInterface;
use App\Repositories\user\creator\tasks\TasksCreatorUserRepository;
use App\Repositories\user\creator\chat\ChatCreatorUserInterface;
use App\Repositories\user\creator\chat\ChatCreatorUserRepository;
use App\Repositories\user\creator\transactions\TransactionsCreatorUserInterface;
use App\Repositories\user\creator\transactions\TransactionsCreatorUserRepository;

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

        // order
        $this->app->bind(
            OrderAdminInterface::class,
            OrderAdminRepository::class
        );
        // transaction
        $this->app->bind(
            TransactionAdminInterface::class,
            TransactionAdminRepository::class
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
        // tasks
        $this->app->bind(
            TasksCreatorUserInterface::class,
            TasksCreatorUserRepository::class
        );
        //chat
        $this->app->bind(
            ChatCreatorUserInterface::class,
            ChatCreatorUserRepository::class
        );
        // Transactions
        $this->app->bind(
            TransactionsCreatorUserInterface::class,
            TransactionsCreatorUserRepository::class
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
        //chat
        $this->app->bind(
            ChatClientUserInterface::class,
            ChatClientUserRepository::class
        );
        //Features
        $this->app->bind(
            FeaturesClientUserInterface::class,
            FeaturesClientUserRepository::class
        );
        //shipping
        $this->app->bind(
            ShippingsClientUserInterface::class,
            ShippingsClientUserRepository::class
        );
        //wallet
        $this->app->bind(
            WalletClientUserInterface::class,
            WalletClientUserRepository::class
        );

        // User

        //AUTH
        $this->app->bind(
            AuthUserInterface::class,
            AuthUserRepository::class
        );
        //ForgotPassword
        $this->app->bind(
            ForgotPasswordUserInterface::class,
            ForgotPasswordUserRepository::class
        );

        // --------------------------------------------------website
        // pages
        $this->app->bind(
            PagesInterface::class,
            PagesRepository::class
        );

    }
}
