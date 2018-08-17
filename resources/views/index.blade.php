@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
                @foreach ($posts as $post)
                    <div class="post card col-md-8">
                    <h2><a href="/posts/{{$post->id}}">
                        {{$post->title}}
                    </a></h2>
                    <p>
                        posted: {{$post->created_at->toFormattedDateString()}}
                    </p>
                    <a href="{{$post->link}}">{{$post->link}} </a>
                    <p>{{$post->content}} </p>

                    <h3>Score: {{$post->vote_count}}</h3>
                    @if (Auth::check())
                        <form class="" action="/votes/{{$post->id}}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" name="upvote" class="btn btn-primary">Upvote </button>
                            <button type="submit" name="downvote"class="btn btn-danger">Downvote </button>
                        </form>
                    @endif

                    @if(auth()->id() == $post->user->id)
                        <div class="buttons">
                        <a class="edit btn btn-primary" href="{{url('/posts/'.$post->id.'/edit')}}">Edit</a>
                        <a class="delete btn btn-danger" href="{{url('/posts/'.$post->id.'/delete')}}">Delete</a>
                    </div>
                    @endif
                    </div>
                @endforeach

        </div><!-- /col -->
    </div><!-- /row -->
@stop
