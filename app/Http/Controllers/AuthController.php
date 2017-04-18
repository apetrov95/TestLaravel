<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
   public function getLogin(){
	  return view('login');
	   
   }
   
   public function postLogin(){
	  /* $loguser= User::select(['login','password'])->get();
	dump($loguser);
	  */
	
	
	
	  $auth = User::attempt(array(
	  'login' => Input::get('login'),
	  'password' => Input::get('password'),)
	  ,false);
	  
	   if(! $auth){
		   return Redirect::route('login')->withErrors(array(
		   'Ошибка авторизации'
		   ));
		   
	   }
	   return Redirect::route('page');
	 
	   
   }
}
