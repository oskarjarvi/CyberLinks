@extends('layouts.master')

@section('content')
<div class="edit">
    <article>
        <h1>Edit your post</h1>
        <form  method="POST" action="/posts/{{$post->id}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" value="{{$post->title}}" required>
            </div><!-- /form-group -->

            <div class="form-group">
                <label for="link">Link</label>
                <input class="form-control" type="url" name="link" value="{{$post->link}}"required>
            </div><!-- /form-group -->

            <div class="form-group">
                <label for="content">Text</label>
                <input class="form-control" type="text" name="content" value="{{$post->content}}"required>
            </div><!-- /form-group -->

            <button type="submit" class="btn btn-primary">Submit</button>
            @include('partials.errors')
        </form>
    </article>
@endsection
