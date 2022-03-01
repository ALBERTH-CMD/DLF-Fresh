<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
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

    //use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    //public const HOME = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Google login
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();

    }

    // Google callback
    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();

        $this->_registerOrLoginUser($user);

        return redirect()->route('admin.home');


    }

    protected function _registerOrLoginUser($data)
    {
        //dd($data);
        $user = User::where('email', '=', $data->email)->first();
        if ($user) {
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id =  $data->id;
            $user->avatar = $data->avatar;
            //$user->roles = $data->name;
            $user->proessa_id = 1;

            $user->save();
        }else{
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id =  $data->id;
            $user->avatar = $data->avatar;
            //$user->roles = $data->name;
            $user->proessa_id = 1;
            $user->password = 123456;
            $user->save();
        }
        //dd($user);

        Auth::login($user);
    }
}
