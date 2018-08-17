<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\post;

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
            session()->flash('message', 'You are now signed up and logged in');
        }

        public function profile()
        {
            if($user = auth()->user())
            {
                $posts = Post::where('user_id', '=', $user->id)->get();

                return view('user.profile', compact('user', 'posts'));
            }
            abort(404);

        }
        public function edit($id)
        {
            if ($user = User::find($id))
            {
                return view('user.edit', compact('user'));
            }
            abort(404);
            return redirect('profile');
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
                'password' => 'required|confirmed',
            ]);

            $img = 'images/placeholder.png';

            if(request('image'))
            {
                $userName = $user->name;

                $img = request('image')->storeAs('images', $userName.'.jpg');
            }

            $user->update(
                [
                    'name' => request('name'),
                    'email' => request('email'),
                    'biography' => request('biography'),
                    'password'=> bcrypt(request('password')),
                    'img_url' => $img,
                ]);

                session()->flash('message', 'Your profile has been updated');

                return redirect()->route('profile', [$id]);
            }
            public function delete($id)
            {
                $user = User::find($id);

                $user->delete();

                session()->flash('message', 'Your account has now been removed');
                return redirect('register');
            }
        }
