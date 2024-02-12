<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMailable;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\CheckEmailExist;
use App\Services\TransactionService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        
        // if (!Cookie::get('auth_email')) {
        //     Cookie::queue('auth_email', auth()->user()->email, 10);
        // }
        // if (isAdmin()) {
        //     return redirect()->route('admin.dashboard');

        // }elseif (isVendor()) {
        //     return redirect()->route('vendor.dashboard');

        // }elseif (isCustomer()) {
        //     return redirect()->route('customer.dashboard');

        // }elseif (isAgent()) {

        //     return redirect()->route('agent.dashboard');
        // }
        
        return redirect('/home');
    }








    /*
    |--------------------------------------------------------------------------
    | SEND PASSWORD RESET EMAIL
    |--------------------------------------------------------------------------
    */
    public function sendPasswordResetEmail(Request $request)
    {

        $request->validate([

            'email'  => ['required', 'email', new CheckEmailExist]
        ]);



        $user = User::query()->where('email', $request->email)->first();

        if ($user) {


            $user->password_reset_token = Hash::make($user->id . uniqid());

            $user->save();

            $user = $user->refresh();


            Mail::to($request->email)->send(new PasswordResetMailable($user, 'Password Recovery Email'));

            return back()->with('message', 'Please Check Your Email For Password Reset Instruction!');
        }

        return back()->with('error', 'User not found by this email');
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
