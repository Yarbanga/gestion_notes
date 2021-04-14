<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\photo;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
    protected function redirectTo()
    {
         if(Auth::user()->statut!=1){
            $this->guard()->logout();
            Session::flash('message', 'Ce compte est non activé !'); 
            Session::flash('alert-class', 'alert-danger text-center'); 
            return '/bashbord';
        
        }
        
        if(Auth::user()->statut!=2){
            Session::flash('message', 'Bienvenue '); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/Espace_prof';
        }

        else{
             
            Session::flash('message', 'Bienvenue dans votre espace!'); 
            Session::flash('alert-class', 'alert-danger text-center'); 
            return '/Espace_eleve';
        }
    } 
}