@extends('layouts.master')

@section('content')

        <div class="col-sm-8">
            <h2>
                {{$post->title}}
            </h2>
            <p>{{$post->user->name}} on
                {{$post->created_at->toFormattedDateString()}}
            </p>
            <p>{{$post->link}} </p>
            <p>{{$post->content}} </p>
            <a class="btn btn-primary" href="">Edit Post</a>
            <a class="btn btn-danger" href="">Delete Post</a>
<div class="edit">
            <article>
            	<h1>Edit your post</h1>
            	<form  method="POST" action="/posts/{{$post->id}}">
                    {{ csrf_field() }}
            		<div class="form-group">
            			<label for="title">Title</label>
            			<input class="form-control" type="text" name="title" placeholder="Title" required>
            		</div><!-- /form-group -->

            		<div class="form-group">
            			<label for="link">Link</label>
            			<input class="form-control" type="url" name="link" value="https://"required>
            		</div><!-- /form-group -->

            		<div class="form-group">
            			<label for="content">Text</label>
            			<input class="form-control" type="text" name="content" required>
            		</div><!-- /form-group -->

            		<button type="submit" class="btn btn-primary">Submit</button>
                    @include('partials.errors')
            	</form>
              </article>
          </div>
            <hr>
        <div class="comments">
            <ul>
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <b>{{$comment->body}}</b>
                    <small>by {{$comment->user->name}}
                    {{$comment->created_at->diffForHumans()}}
                    </small>

                </li>

            @endforeach
        </ul>
        </div>
    </div><!-- /row -->
    <div class="card">
        <div class="card-block">
    	<form  method="POST" action="/{{$post->id}}/comments">
            {{ csrf_field() }}

    		<div class="form-group">
    			<textarea class="form-control" name="body" placeholder="Your comment here"> </textarea
    		</div><!-- /form-group -->
            <div class="form-group">
    		<button type="submit" class="btn btn-primary">Submit</button>
        </div>
            @include('partials.errors')
    	</form>
    </div>
</div>
@endsection
