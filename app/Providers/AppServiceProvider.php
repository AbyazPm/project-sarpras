<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', function (User $user) {
            return $user->roles_id === 1;
        });

        Gate::define('pj', function (User $user) {
            return $user->roles_id === 2;
        });

        Gate::define('pg', function (User $user ){
            return $user->roles_id === 3;
        });

        // Gate::define('ja', function (User $user ){
        //     return $user->roles_id === 3;
        // });
    }
}
