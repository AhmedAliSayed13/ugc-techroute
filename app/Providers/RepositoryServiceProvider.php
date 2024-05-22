<?php namespace App\Providers;

use App\Repositories\admin\auth\AuthAdminInterface;
use App\Repositories\admin\auth\AuthAdminRepository;
use App\Repositories\admin\dashboard\DashboardAdminInterface;
use App\Repositories\admin\dashboard\DashboardAdminRepository;
use App\Repositories\admin\role\RoleAdminInterface;
use App\Repositories\admin\role\RoleAdminRepository;

use App\Repositories\Marketing\Ad\AdInterface;
use App\Repositories\Marketing\Ad\AdRepository;
use App\Repositories\Marketing\Ajax\AjaxInterface;
use App\Repositories\Marketing\Ajax\AjaxRepository;
use App\Repositories\Marketing\Category\CategoryInterface;
use App\Repositories\Marketing\Category\CategoryRepository;
use App\Repositories\Marketing\ContractType\ContractTypeInterface;
use App\Repositories\Marketing\ContractType\ContractTypeRepository;
use App\Repositories\Marketing\Contract\ContractInterface;
use App\Repositories\Marketing\Contract\ContractRepository;
use App\Repositories\Marketing\Setting\SettingInterface;
use App\Repositories\Marketing\Setting\SettingRepository;
use App\Repositories\Options\Pages\PagesInterface;
use App\Repositories\Options\Pages\PagesRepository;
use App\Repositories\Options\Survey\SurveyInterface;
use App\Repositories\Options\Survey\SurveyRepository;
use App\Repositories\Options\Visitor\VisitorInterface;
use App\Repositories\Options\Visitor\VisitorRepository;
use App\Repositories\Platform\PlatformInterface;
use App\Repositories\Platform\PlatformRepository;
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


    }
}
