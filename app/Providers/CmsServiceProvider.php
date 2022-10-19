<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request; 
use \App\Helpers\Cmstranslate; 
class CmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request)
    { 
        // to get all global config values from database
        config()->set('cms', \App\Models\CmsModels\CMSsetting::pluck('value', 'key')->all());
        config()->set('site', \App\Models\CmsModels\GlobaSettings::pluck('value', 'key')->all());
        // to get cms dir like  ( rtl - ltr ) for layuot 
        config()->set('cmsdir', \App\Models\CmsModels\CMSLang::pluck('dir', 'code')->all());
        // get all cms text Translation will use key  names only eill return text value 
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
