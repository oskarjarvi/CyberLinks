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

        public function profile()
        {
            if($user = auth()->user())
            {
                return view('user.profile', compact('user'));
            }
            abort(404);

        }
        public function update($id)
        {
            $user = User::find($id);

            if (!$user)
            {
                abort(404);
            }
            $this -> validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);
            $img = request('image')->storeAs('images', $user->name.'.jpg');

            $user->update(
                [
                'name' => request('name'),
                'email' => request('email'),
                'password'=> bcrypt(request('password')),
                'img_url' => $img,
                ]);
            return back();
        }
    }
