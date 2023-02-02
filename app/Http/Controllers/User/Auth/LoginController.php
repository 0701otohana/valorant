<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Models\User;
use Illuminate\Http\Request;

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


//----------------------------google-------------------------------
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $gUser = Socialite::driver('google')->stateless()->user();
        // email が合致するユーザーを取得
        $user = User::where('email', $gUser->email)->first();
        if ($user == null) {
            //$user = $this->createUserByGoogle($gUser);
            return redirect()->route('user.signup')
            ->withInput(['email' => $gUser->email])
            ->with('login_error','Riotに登録されていません。新規登録を行ってください');
        }
        // ログイン処理
        \Auth::login($user, true);
        return redirect('/EntryForm');
    }

    //public function createUserByGoogle($gUser)
    //{
        //$user = User::create([
            //'email'    => $gUser->email,
            //'password' => \Hash::make(uniqid()),
        //]);
        //return $user;
    //}
    
}
