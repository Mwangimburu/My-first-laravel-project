<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LandlordsLoginController extends Controller
{   
    public function __construct(){
        $this->middleware('guest:landlords')->except('logout');
    }

    public function showloginform(){
        return view('auth.landlordslogin');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=>'required|min:6'
        ]);
        if (Auth::guard('landlords')->attempt(
            ['email'=>$request->email,'password'=>$request->password],
            $request->remember
        )) 
        {
            return redirect()->intended(route('landlords.home'));
        } 
        return redirect()->back()->withInput($request->only('email','remember'));
        
    }
    public function logout()
    {
        Auth::guard('landlords')->logout();

        return  redirect('/');
    }
}
