<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

     public function redirecto(){
            switch(Auth::users()->role){
                case '0':
                    $this->redirecto='/unknown';
                    return $this->redirecto;
                break;
                case '1':
                    $this->redirecto='/admin';
                    return $this->redirecto;
                break;
                case '2':
                    $this->redirecto='/manager';
                    return $this->redirecto;
                break;
                case '3':
                    $this->redirecto='/hrm';
                    return $this->redirecto;
                break;
                case '4':
                    $this->redirecto='/accounting';
                    return $this->redirecto;
                break;
                case '5':
                    $this->redirecto='/emp';
                    return $this->redirecto;
                break;
                default:
                    $this->redirecto= "/home";
                    return $this->redirecto;
                break;
            }

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
