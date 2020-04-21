<?php

namespace App\Providers;

use App\Http\Middleware\Lang;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
       app('view')->composer('*', function($view){
          $lang = Lang( str_replace('_', '-', app()->getLocale()) );
          $view->with(compact('lang'));
        });
        if (!session()->has('lang'))
        {
            session()->put('lang', 'ar');
        }
        Schema::defaultStringLength(191);
    }
}
