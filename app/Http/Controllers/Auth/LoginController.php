<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Error;

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

    public function login(Request $request) {
        $data = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );

        if (!auth()->attempt($data)) {
            return response("Ten dang nhap hoac mat khau sai");
        }

        // $user = User::whereEmail($request->email)->first();

        // // $email = $request->email;
		// $validatePassword = Hash::check($request->password, $user->password);
        // if (!$validatePassword) {
        //     throw new Error("Ten dang nhap hoac mat khau sai");
        // }

        // $token = auth()->user()->createToken('access_token')->accessToken;
        $token = auth()->user()->accessToken;
        return response([
            'user' => auth()->user(),
            'token' => $token
        ]);
    }
}
