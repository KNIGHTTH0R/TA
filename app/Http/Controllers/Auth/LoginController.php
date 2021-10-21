<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('client.auth.login');
    }

    public function store(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credential)) {
            return back()->with('failure', 'Username or password is invalid');
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
