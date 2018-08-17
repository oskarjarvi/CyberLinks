<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;
use App\Comments;


class CommentController extends Controller
{
    public function store(Post $post)
    {
        $post->addComment(request('body'));

        return back();
    }
    public function edit($id)
    {
        if ($comment = Comments::find($id))
        {
            return view('editComment', compact('comment'));
        }
        abort(404);
        return back();
    }
    public function update($id)
    {
        $comment = Comments::find($id);

        if (!$comment)
        {
            abort(404);
        }

        $comment->update(
            ['body' => request('body'),
        ]);

        session()->flash('message', 'Your comment is now updated');
        return redirect()->route('show', [$comment->post_id]);
    }
    public function delete($id)
    {
        $comment = Comments::find($id);

        $comment->delete();

        session()->flash('message', 'Your comment has now been removed');
        return redirect()->route('show', [$comment->post_id]);
    }
}
