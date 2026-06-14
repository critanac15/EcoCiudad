<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
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

        // Forzar HTTPS global en Laravel
        URL::forceScheme('https');

        // LA SOLUCIÓN PARA VITE: Obligar a Vite a usar HTTPS en producción
        if (config('app.env') === 'production' || env('ASSET_URL')) {
            Vite::useScriptTagAttributes([
                'crossorigin' => 'anonymous'
            ]);
            
            // Forzar a que use la URL segura de Render
            Vite::macro('useHttps', function () {
                return true; 
            });
        }
    }
}
