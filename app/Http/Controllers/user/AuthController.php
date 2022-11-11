<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'number' =>  'required|max:15|min:6',
            'password_confirmation' => 'required|min:6'
        ]);
        $signup = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->number,
            'password' => Hash::make($request->password)
        ]);
        if ($signup) {
            auth()->login($signup);
            return redirect()->route('web_tickets');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(session()->has('redirect_route') && !empty(session()->get('redirect_route'))){
                $redirect_to = session()->get('redirect_route');
                session()->forget('redirect_route');
                return redirect()->route($redirect_to);
            }
            return redirect()->route('web_tickets');
        } else {
            return redirect()->back()->with('message', __('translation.Email or password is invalid'));
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('web_login');
    }
}
