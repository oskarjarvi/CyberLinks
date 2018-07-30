@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
                @foreach ($posts as $post)
                    <div class="card col-md-8">
                    <h2><a href="/posts/{{$post->id}}">
                        {{$post->title}}
                    </a></h2>
                    <p>{{$post->user_id}} </p>
                    <p>{{$post->link}} </p>
                    <p>{{$post->content}} </p>
                    </div>
                @endforeach

        </div><!-- /col -->
    </div><!-- /row -->
@stop
