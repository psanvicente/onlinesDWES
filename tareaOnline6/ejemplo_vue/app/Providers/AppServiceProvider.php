<?php

namespace App\Providers;

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
        //para solucionar lo del tamaño
        //además descomentar la linea línea de código en bootstrap/app.php en la línea 81;
        //$app->register(App\Providers\AppServiceProvider::class);
        //Schema::defaultStringLength(191);
    }
}
