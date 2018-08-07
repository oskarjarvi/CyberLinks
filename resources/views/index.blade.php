@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
                @foreach ($posts as $post)
                    <div class="card col-md-8">
                    <h2><a href="/posts/{{$post->id}}">
                        {{$post->title}}
                    </a></h2>
                    <p>{{$post->user->name}} on
                        {{$post->created_at->toFormattedDateString()}}
                    </p>
                    <p>{{$post->link}} </p>
                    <p>{{$post->content}} </p>

                    <form class="" action="/votes/{{$post->id}}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" name="upvote" class="btn btn-primary">Upvote </button>
                        <button type="submit" name="downvote"class="btn btn-danger">Downvote </button>
                    </form>
                    </div>
                @endforeach

        </div><!-- /col -->
    </div><!-- /row -->
@stop
