<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Socialite;
use App\Models\User;
use Auth;
use Str;
use Session;
use Redirect;

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

    // use AuthenticatesUsers;
    use AuthenticatesUsers {
        logout as performLogout;
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        Session::flash('message', "You have successfully logged out");
        return redirect()->route('login');
    }


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

    public function home(){

    }


    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $Username = Auth::User()->email;
                return response()->json([
                    "message" => "Success"
                ]);
        }else{
                return response()->json([
                    "message" => "Fail"
                ]);
        }

    }

    public function facebookRedirect(){
        $user = Socialite::driver('facebook')->stateless()->user();
        // Logic
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
             'name' =>$user->name,
             'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);
        return redirect()->to('/mobile');
    }

    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect(){
        $user = Socialite::driver('google')->stateless()->user();
        // Logic
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
             'name' =>$user->name,
             'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);
        return redirect()->to('/mobile');
    }



    public function callback(SocialFacebookAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->stateless()->user());
        auth()->login($user);
        return redirect()->to('/mobile');
    }
}
