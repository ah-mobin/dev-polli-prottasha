<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\SiteSettings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
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
        Paginator::useBootstrap();
        if($siteSettings = SiteSettings::first()){
            View::share('brandName',$siteSettings->site_name);
            View::share('favicon',$siteSettings->favicon);
            View::share('logo',$siteSettings->logo);
            View::share('siteNameBn',$siteSettings->site_name_bn);
            View::share('addressLineOne',$siteSettings->physical_address_line_one);
            View::share('addressLineTwo',$siteSettings->physical_address_line_two);
            View::share('siteEmail',$siteSettings->email_address);
            View::share('sitePhone',$siteSettings->phone_number);
            View::share('copyrightText',$siteSettings->copyright_text);
        }
    }
}
