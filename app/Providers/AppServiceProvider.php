<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if( is_api_domain() and request()->getLanguages() ) {
            $preferred = request()->getPreferredLanguage();
            $locale = str_contains($preferred, ['ko_KR' => 'ko', 'ko' => 'ko']) ? 'ko' : 'en';
            app()->setLocale($locale);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
