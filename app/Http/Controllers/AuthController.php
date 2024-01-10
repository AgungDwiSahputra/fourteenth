<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('Auth.login');
    }

    public function login_process(Request $request) {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();
        $route = null;
        if($user){
            if($user->role == 'ops'){
                $route = 'index.ops';
            }else{
                $route = 'index.management';
            }
    
            if (Auth::attempt($credentials)) {
                // Login berhasil
                return redirect()->route($route)->with('success', 'Success Login!');
            }
        }
        // Login gagal
        return redirect()->route('login')->with('error', 'Email or Password Invalid!');
    }
    public function forgot_pass(Request $request) {
        $user = User::where('email', $request->email_forgot)->first();
        if($user){
            $user->password = Hash::make('password');
            $user->save();
            
            return redirect()->route('login')->with('success', 'Success reset password!');
        }
        return redirect()->route('login')->with('error', 'Email not found!');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Success Logout!');
    }
}
