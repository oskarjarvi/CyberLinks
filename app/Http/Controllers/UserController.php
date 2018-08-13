<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        }

        public function profile()
        {
            if($user = auth()->user())
            {
                $post = Post::where('user_id', '=', $user->id)->get();
                return view('user.profile', compact('post'));
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
            return redirect('user/profile');
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

            $img = 'images/placeholder';

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
            return back();
        }
        public function delete($id)
        {
            $user = User::find($id);

            $user->delete();

            return redirect('');
        }
    }
