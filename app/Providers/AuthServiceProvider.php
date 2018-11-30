<?php

namespace App\Providers;


use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Notices;
use App\User;
use App\Permission; 

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //\App\Notices::class => \App\Policies\NoticePolices::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */

    

    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        
        $Permissions= Permission::with('roles')->get();
        //dd($Permissions);
        foreach($Permissions as $per)
        {//dd($per);
            $gate->define($per->name,  function(User $user) use ($per){
                
                return $user->hasPermission($per);
                
            });

        }
        
        $gate->before(function(User $user ,  $ability){

           if( $user->hasAnyRoles('admin')){
               return true;
           }
           
        });
        
    
    }
}
