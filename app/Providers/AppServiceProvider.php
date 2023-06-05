<?php

namespace App\Providers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        Inertia::share('flash',function(){
            return [
                'success' => FacadesSession::get('success'),
            ];
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
