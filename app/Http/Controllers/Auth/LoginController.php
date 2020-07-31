<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        if (Auth::check() && Auth::user()->role == 'admin') {

            $this->redirectTo = route('home');

        }elseif(Auth::check() && Auth::user()->role == 'account')
        {
            $this->redirectTo = route('account');

        }else(Auth::check() && Auth::user()->role == 'teacher');
        {
            $this->redirectTo = route('teacher');
        }

        $this->middleware('guest')->except('logout');
    }
}
