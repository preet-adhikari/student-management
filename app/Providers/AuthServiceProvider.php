<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\Types\True_;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        For Admin only
        Gate::define('admin-only', function (User $user) {
            if ($user->role_id == Role::IS_ADMIN)  {
                return true;
            }
            return false;
        });
//        For Admin and Principal
        Gate::define('admin-and-principal', function (User $user) {
           if ($user->role_id == Role::IS_ADMIN || $user->role_id == Role::IS_PRINCIPAL)  {
               return true;
           }
           return false;
        });


//        For Admin and Principal and Teacher
        Gate::define('admin-teachers-principal-only' , function (User $user) {
            if ( !($user->role_id == Role::IS_STUDENT)){
                return true;
            }
            return false;
        });


//        For Teachers
        Gate::define( 'teachers-only' , function (User $user) {
           if ( $user->role_id == Role::IS_TEACHER ) {
               return true;
           }
           return false;
        });

        // For Students
        Gate::define( 'students-only' , function (User $user) {
           if ( $user->role_id == Role::IS_STUDENT ){
               return true;
           }
           return false;
        });
    }
}
