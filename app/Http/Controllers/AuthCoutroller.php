<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCoutroller extends Controller
{
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/admin')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("admin/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function logout() {
        Auth::logout();

        return Redirect('/admin/login');
    }

    public function home(Request $request) {
        $colors = Color::first();
        session()->put('lang', $request->lang);
        app()->setLocale($request->lang);
        return view('welcome',[
            'color' => $colors
        ]);
    }
}
