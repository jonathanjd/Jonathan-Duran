<?php

namespace App\Providers;

use App\Policies\CategoryPolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('create-admin',function($user){
          return $user->email === "headjd@gmail.com";
        });

        $gate->define('edit-admin',function($user){
          return $user->email === "headjd@gmail.com";
        });

        $gate->define('delete-admin',function($user){
          return $user->email === "headjd@gmail.com";
        });

    }
}
