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

    </div>
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
<div class="card">
    <div class="card-block">
        <form  method="POST" action="/{{$post->id}}/comments">
            {{ csrf_field() }}
            <h4> Create a comment here </h4>
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
