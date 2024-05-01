<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | TRAITS
    |--------------------------------------------------------------------------
    */
    use AuthenticatesUsers;






    /*
    |--------------------------------------------------------------------------
    | REDIRECT PATH
    |--------------------------------------------------------------------------
    */
    protected $redirectTo = RouteServiceProvider::HOME;








    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }








    /*
    |--------------------------------------------------------------------------
    | SET LOGIN FIELD
    |--------------------------------------------------------------------------
    */
    public function username()
    {
        return 'email';
    }








    /*
    |--------------------------------------------------------------------------
    | REDIRECT USER TO THEIR DASHBOARD
    |--------------------------------------------------------------------------
    */
    protected function authenticated(Request $request, $user)
    {
        
        return redirect('/home');
    }














    /*
    |--------------------------------------------------------------------------
    | VERIFY PASSWORD RESET TOKEN
    |--------------------------------------------------------------------------
    */
    public function verifyResetPasswordToken(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'token' => 'required',
        ]);

        $data['user'] = User::query()
            ->where('email', $request->email)
            ->where('password_reset_token', $request->token)
            ->first();

        return view('auth.login', $data);
    }








    /*
    |--------------------------------------------------------------------------
    | RESET/UPDATE PASSWORD
    |--------------------------------------------------------------------------
    */

    public function updateUserPassword(Request $request)
    {

        $request->validate([

            'email'     => 'required',
            'token'     => 'required',
            'password'  => 'required|string|confirmed',
        ], [
            'password.confirmed' => 'The repeat password does not match.'
        ]);


        try {

            $user = User::query()
                ->where('email', $request->email)
                ->where('password_reset_token', $request->token)
                ->first();

            if(!$user) {
                return redirect()->back()->withError('Sorry, Token Expired!');
            }


            $user->password = Hash::make($request->password);
            $user->password_reset_token = null;

            $user->save();


            return redirect()->route('login')->with('message', 'Password Reset Successfully. Please Login!');

        } catch (\Throwable $th) {


            return redirect()->back()->withError($th->getMessage());
        }
    }
}
