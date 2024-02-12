<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdminInfo;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = 'admin/home';




    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
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



    public function showLoginForm() {
        return view('admin.login');
    }

    // public function login(Request $request) {
    //     $request->validate([
    //         'email'     => 'required',
    //         'password'  => 'required'
    //     ]);
        
    //     $admin_login = AdminInfo::query()->where([
    //         'email' => $request->email,
    //         // 'password'=> Hash::make($request->password)
    //     ])->first();
    //     dd($admin_login, Hash::make($request->password));
    //     if($admin_login){
    //         Auth::login($admin_login);
    //         return redirect()->route('admin.home')->with('error', 'Invalid');
    //     }else{
    //         return redirect()->back()->with('error', 'Invalid');
    //     }
    // }



    protected function guard()
    {
        return Auth::guard('admin');
    }
}
