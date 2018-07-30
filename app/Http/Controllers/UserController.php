<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    public function create()
    {
        $this -> validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(
            [
                'name'=> request('name'),
                'email'=> request('email'),
                'password' =>bcrypt(request('password'))
            ]);

        auth()->login($user);

        return redirect('/');
    }
}
