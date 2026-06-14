<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
    public function boot(): void
    {
        //

        // Fuerza HTTPS directamente para evitar errores de variables de entorno
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }
}
