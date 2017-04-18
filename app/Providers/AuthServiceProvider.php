<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use Illuminate\Http\Request;

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
public function boot(GateContract $gate, Request $request)
{
	
	 $priv= new User;
	 $priv->name=$request->name;
	 //dump($priv);
     $this->registerPolicies($gate);
     $gate->define('create', function ($user){
     return $user->name=='manager';});

     $gate->define('show',function ($user){

     return $user->name=='user' || $user->name=='manager'; });
	
			
     }
}