<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

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
    // public $redirectTo = '/lista';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    

    public function redirectTo(){
        
        $id = Auth::id();
        $user = new User();
        $idRol = $user->where('id', $id)->get()[0]->id;
 
        switch ($idRol) {
            case 4:
                 return "/medico";
                break;

                case 5:
                    return "/dashboard";
                   break;                
                
                   case 6:
                    return "/expuestos/ver-resultados-examen";
                   break;    
            
            default:
                 return "/lista";
                break;
        }
       

       
    }
}
