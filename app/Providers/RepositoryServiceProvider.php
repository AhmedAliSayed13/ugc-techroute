<?php namespace App\Providers;



use App\Repositories\Service\ServiceInterface;
use App\Repositories\Service\ServiceRepository;

use App\Repositories\Marketing\Ad\AdInterface;
use App\Repositories\Marketing\Ad\AdRepository;
use App\Repositories\Marketing\Category\CategoryInterface;
use App\Repositories\Marketing\Category\CategoryRepository;
use App\Repositories\Marketing\ContractType\ContractTypeInterface;
use App\Repositories\Marketing\ContractType\ContractTypeRepository;
use App\Repositories\Marketing\Contract\ContractInterface;
use App\Repositories\Marketing\Contract\ContractRepository;
use App\Repositories\Marketing\Setting\SettingInterface;
use App\Repositories\Marketing\Setting\SettingRepository;
use App\Repositories\Marketing\Ajax\AjaxInterface;
use App\Repositories\Marketing\Ajax\AjaxRepository;

use App\Repositories\Options\Visitor\VisitorInterface;
use App\Repositories\Options\Visitor\VisitorRepository;

use App\Repositories\Options\Pages\PagesInterface;
use App\Repositories\Options\Pages\PagesRepository;

use App\Repositories\Options\Survey\SurveyInterface;
use App\Repositories\Options\Survey\SurveyRepository;

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
        // Marketing Service Type
        $this->app->bind(
            ServiceInterface::class,
            ServiceRepository::class
        );

        // Ads
        $this->app->bind(
            AdInterface::class,
            AdRepository::class
        );
        // Categories
        $this->app->bind(
            CategoryInterface::class,
            CategoryRepository::class
        );
        // ContractTypes
        $this->app->bind(
            ContractTypeInterface::class,
            ContractTypeRepository::class
        );

        // Contracts
        $this->app->bind(
            ContractInterface::class,
            ContractRepository::class
        );
        // Setting
        $this->app->bind(
            SettingInterface::class,
            SettingRepository::class
        );
        // Setting
        $this->app->bind(
            VisitorInterface::class,
            VisitorRepository::class
        );
        // Ajax
        $this->app->bind(
            AjaxInterface::class,
            AjaxRepository::class
        );

        // Platform
        $this->app->bind(
            PlatformInterface::class,
            PlatformRepository::class
        );


        // Survey
        $this->app->bind(
            SurveyInterface::class,
            SurveyRepository::class
        );
        // Pages
        $this->app->bind(
            PagesInterface::class,
            PagesRepository::class
        );


  }
}
