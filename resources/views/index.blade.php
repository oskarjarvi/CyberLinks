@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Blog</h1>
            <p></p>
            <ul>
                @foreach ($posts as $post)

                    <a href="/posts/{{$post->id}}">
                        {{$post->title}}
                    </a>
                    <li>{{$post->link}} </li>
                    <li>{{$post->content}} </li>
                @endforeach
            </ul>
        </div><!-- /col -->
    </div><!-- /row -->
@stop
