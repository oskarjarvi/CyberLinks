@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        <p>Name:{{$user->name}} member since
            {{$user->created_at->toFormattedDateString()}}
        </p>
        <p>Email:{{$user->email}}</p>
        <p> Biography: {{$user->biography}}
            <hr>
            <a class="btn btn-primary" href="{{url('profile/'.$user->id.'/edit')}}">Edit Profile</a>
            <a class="btn btn-danger" href="{{url('profile/'.$user->id.'/delete')}}"> Delete User</a>
        </div>

        <a class="btn btn-primary" href="{{url('/posts/'.$post->id.'/edit')}}">Edit Post</a>
        <a class="btn btn-danger" href="">Delete Post</a>
    @endsection
