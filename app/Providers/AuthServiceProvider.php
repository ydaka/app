<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Administrador', function($user){
            return (strtolower($user->rol_por_usuario)==='1');
        });

        Gate::define('Usuario', function($user){
            return (strtolower($user->rol_por_usuario)==='2');
        });

        Gate::define('Visitante', function($user){
            return (strtolower($user->rol_por_usuario)==='3');
        });
    }
}
