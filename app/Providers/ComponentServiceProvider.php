<?php

namespace App\Providers;


// use App\View\Components\Admin\BreadCrumb as BreadCrumb;
use App\View\Components\admin\breadcrumb as breadcrumb;
use App\View\Components\admin\search as search;
use App\View\Components\admin\button_acttion as button_acttion;
use App\View\Components\admin\pagination as pagination;
use App\View\Components\admin\FormInput as FormInput;
use App\View\Components\admin\FormFile as FormFile;
use App\View\Components\admin\FormShowFile as FormShowFile;
use App\View\Components\admin\FormSelect as FormSelect;
use App\View\Components\admin\FormSubmit as FormSubmit;
use App\View\Components\admin\FormSwitch as FormSwitch;
use App\View\Components\admin\FormTextarea as FormTextarea;
use App\View\Components\admin\Badge as Badge;
use App\View\Components\admin\FormCheckbox as FormCheckbox;

// user
use App\View\Components\user\breadcrumb_user as breadcrumb_user;
use App\View\Components\user\order_creator as order_creator;




use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        Blade::component('breadcrumb', breadcrumb::class);
        Blade::component('search', search::class);
        Blade::component('button_acttion', button_acttion::class);
        Blade::component('pagination', pagination::class);
        Blade::component('FormInput', FormInput::class);
        Blade::component('FormFile', FormFile::class);
        Blade::component('FormShowFile', FormShowFile::class);
        Blade::component('FormSelect', FormSelect::class);
        Blade::component('FormSubmit', FormSubmit::class);
        Blade::component('FormSwitch', FormSwitch::class);
        Blade::component('FormTextarea', FormTextarea::class);
        Blade::component('badge', Badge::class);
        Blade::component('FormCheckbox', FormCheckbox::class);


        Blade::component('breadcrumb_user', breadcrumb_user::class);
        Blade::component('order_creator', order_creator::class);


    }
}
