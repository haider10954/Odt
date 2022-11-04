<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function signup(Request $request){
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
       $signup = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
       ]);
       if($signup){
          auth()->login($signup);
          return redirect()->route('web_tickets');
       }
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(\Auth::attempt(['email' => $request->email , 'password' => $request->password ])){
            return redirect()->route('web_tickets');
        }else{
            return redirect()->back()->with('message','Email or password is invalid');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('web_login');
    }
}