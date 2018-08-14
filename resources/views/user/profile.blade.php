@extends('layouts.master')

@section('content')
<div class="row">
    <div class="profile col-sm-8">
        <p>Name: {{$user->name}} member since
            {{$user->created_at->toFormattedDateString()}}
        </p>
        <p>Email: {{$user->email}}</p>
        <p> Biography: {{$user->biography}} </p>
            <img src="{{asset($user->img_url)}}">
            <hr>
            <a class="btn btn-primary" href="{{url('profile/'.$user->id.'/edit')}}">Edit Profile</a>
            <a class="btn btn-danger" href="{{url('profile/'.$user->id.'/delete')}}"> Delete User</a>
        </div>

        @foreach ($posts as $post)
            <div class="p post card row col-md-8">
                <div class="card-body">
                <h2 class="card-title"><a href="/posts/{{$post->id}}">
                    {{$post->title}}
                </a></h2>

                <p>{{$post->user->name}} on
                    {{$post->created_at->toFormattedDateString()}}
                </p>
                <p>{{$post->link}} </p>
                <p>{{$post->content}} </p>

                <a class="btn btn-primary" href="{{url('/posts/'.$post->id.'/edit')}}">Edit Post</a>
                <a class="btn btn-danger" href="{{url('/posts/'.$post->id.'/delete')}}">Delete Post</a>
            </div>
        </div>
            @endforeach
        </div>
        @endsection
