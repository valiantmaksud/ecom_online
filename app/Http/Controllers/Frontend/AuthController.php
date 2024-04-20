<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function login(Request $request)
    {
        if ($request->submit === 'register') {
            return $this->register($request);
        }
        
        if ($request->isMethod('post')) {
            if($request->filled('phone_number')){

                $this->validate($request, [
                    'phone_number'      => 'required',
                    'mobile_password'   => 'required',
                ]);

            }else{
                $this->validate($request, [
                    'email'     => 'required|email',
                    'password'  => 'required',
                ]);
            }
            
            if($request->filled('phone_number')){
                if (auth()->attempt(['phone' => $request->phone_number, 'password' => $request->mobile_password])) {
                    return redirect()->route('frontend.index');
                }
            }
            if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('frontend.index');
            }
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
        return view('frontend.auth.login');
    }



    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                $this->validate($request, [
                    'name'          => 'nullable|string|max:255',
                    'email'         => 'nullable|email|unique:user_infos,email',
                    'phone_number'  => 'nullable|unique:user_infos,phone',
                ]);
                $user = User::create([
                    'name'      => $request->name ?? $request->phone_number,
                    'email'     => $request->email ?? $request->phone_number,
                    'phone'     => $request->phone_number,
                    'password'  => bcrypt($request->password ?? $request->email_password),

                ]);

                auth()->login($user);

                return redirect()->route('frontend.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        return view('frontend.auth.register');
    }



    public function account()
    {
        return view('frontend.profile.account');
    }



    public function order()
    {
        return view('frontend.profile.order');
    }


    public function review()
    {
        $data['orders'] = Order::query()->where('user_id', auth()->id())->where('status', 'delivered')->with('orderDetails.product')->get();
        return view('frontend.profile.review', $data);
    }



    public function trackOrder()
    {
        return view('frontend.profile.track-order');
    }



    public function wishlist()
    {
        return view('frontend.profile.wishlists');
    }



    public function update(Request $request)
    {
        $request->validate([
            'email'     => 'nullable|email|unique:users,email,' . auth()->user()->id,
            'mobile'    => 'nullable|unique:users,mobile,' . auth()->user()->id,
            'password'  => 'nullable|confirmed',
        ]);

        $user = User::find(auth()->user()->id)->update([
            'name'      => $request->first_name . ' ' . $request->last_name,
            'email'     => $request->email ?? auth()->user()->email,
            'mobile'    => $request->mobile ?? auth()->user()->mobile,
        ]);

        if ($request->filled('password') && $request->password == $request->password_confirmation) {
            $user->update([
                'password'  => bcrypt($request->password),
            ]);
        }

        return back()->with('success', 'Profile updated successfully');
    }



    public function orderShow($id)
    {
        $data['order']      = Order::query()->with('orderDetails.product', 'customer')->find($id);
        $data['company']    = collect();
        return view('frontend.profile.invoice', $data);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('frontend.auth.login');
    }
}
