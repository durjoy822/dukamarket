<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    public function buyerLogin(){
        return view('home.buyer_auth.login');
    }
    public function buyerStore(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
//        dd($request->all());
        $user           = new User();
        $user->name     =$request->name;
        $user->email    =$request->email;
        $user->password =bcrypt($request->password);
        $user->save();
        Session::flash('success', 'Buyer Registered Successfully!');
        Auth::login($user);
        return redirect()->route('home');
    }

    public function buyerLoginAuth(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember_me'))) {
            Session::flash('success', 'Buyer Login Success!');
            return redirect()->route('home');
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid Credentials']);
    }
    public function buyerLogout(){
        Auth::logout();
        Session::flash('warning', 'Buyer Logout success!');
        return redirect()->route('home');
    }
    public function buyerProfile(){
        return view('home.buyer_auth.profile');
    }
}
