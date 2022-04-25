<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Enums\Role;
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
        $this->defineRoleGate('isAdmin', Role::ADMIN);
        $this->defineRoleGate('isUser',Role::USER);
    }
    private function defineRoleGate(string $name,string $role){

        Gate::define($name,function($user) use ($role){
            return $user->role == $role;
        });
        //
    }
    }

