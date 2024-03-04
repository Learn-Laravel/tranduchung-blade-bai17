<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Blade::directive('datetime', function($expression){
        //     $expression =trim($expression, '\'');
        //     $expression = trim($expression, '""');
        //     $dateObject = date_create($expression);
        //     $dateFormat =$dateObject -> format('d/m/Y H:i:s');
        //     if (!empty($dateObject)){
        //         return  $dateFormat;
        //     }
        //     return false;
        // });
        Blade::if('env', function($value){
            // trar ve gia tri boolean
            if(config('app.env') === $value){
                return true;
            }
            return false;
        });
    }
}
