<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect('/');
        }
        return back()->withErrors('Whoops. Looks like you missed something there. Please try again.');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}
