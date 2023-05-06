<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function adminProfile(){
        return view('admin.authantication.profile');
    }
    public function adminLogin(){
        return view('admin.authantication.login');
    }
    public function adminRegister(){
        return view('admin.authantication.register');
    }

    public function newAdmin(Request $request){
//        dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:6|max:64',
        ],
        [
            'name.required'=>'Input your valid name',
            'email.required'=>'Email is requird',
            'password.required'=>'password is requird',
            'password.min'=>'Minimum 6 charecter required!',
            'password.max'=>'More than 64 not allowed!',
            ]);
        $admin=New Admin();
        $admin->name= $request->name;
        $admin->email= $request->email;
        $admin->password=FacadesHash::make($request->password);
        $admin->save();
        Auth::guard('admin')->login($admin);
        Session::flash('success','New admin Register Successfull!');
        return redirect()->route('admin.dashboard');
    }
    public function adminAuthCheck(Request $request){
//        dd($request->all());
        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password],$request->has('remember'))){
            Session::flash('success','Admin Login Successfull!');
            return redirect()->route('admin.dashboard');
        }else{
            Session::flash('warning','OPS! You provided a wrong  information!');
            Return back();
        }
    }
    public function adminLogOut(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
