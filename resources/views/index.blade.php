@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Blog</h1>
            <p></p>
            <ul>
                @foreach ($posts as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
            </ul>
        </div><!-- /col -->
    </div><!-- /row -->
@stop
