<?php

namespace CRUDLaravel54\Providers;

use Illuminate\Support\ServiceProvider;
// Importado CRUDLaravel5.4
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // CRUDLaravel5.4
            // El máximo es 191
            Schema::defaultStringLength(191);
        // 
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
