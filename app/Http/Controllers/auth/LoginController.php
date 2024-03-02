<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function authenticate(Request $request)
    {
/*     $credentials = $request->validate([
            'email' => ['required', 'email','max:255','unique:users'],
            'password' => ['required','max:255'],
        ]); */

        if (Auth::attempt(/* $credentials */['email'=>$request->email, 'password'=>$request->password, 'estatus'=>'1'])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}


}
