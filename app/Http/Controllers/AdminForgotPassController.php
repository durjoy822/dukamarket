<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminForgotPassController extends Controller
{
    public function forgotPass(){
        return view('admin.authantication.password.forgot');
    }
    public function resetForm(){
        return view('admin.authantication.password.reset-form');
    }
}
