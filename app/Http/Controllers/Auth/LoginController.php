<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
    //    dd(Hash::make($loginData['password']));
        $user=  User::where('email','=',$loginData['email'])->first();

        if ( !auth()->attempt($loginData)) {
            // dd("error");
            return redirect()->back()->withErrors([' البريد الاكتروني غير صحيحة ','او',' كلمة السر غير صحيحة']);

        }
        
        $locations = Location::where("user_id",auth()->user()->id)->get();
       
        return view('users.index',compact('locations'));
        
    }
    public function logout(Request $request)
    {
        if (auth()->check()) {

            return redirect('login')->with(Auth::logout());
            
        }
    }
}
