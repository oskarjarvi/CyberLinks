@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-8">
            <h1 class="mt-5">{{$post->title}}</h1>

            <ul>
                <li>{{$post->link}} </li>
                <li>{{$post->content}} </li>
            </ul>
        </div><!-- /col -->

        <div class="comments">
            @foreach ($post->comments as $comment)
                <article>
                    {{$comment->body}}
                </article>

            @endforeach
        </div>
    </div><!-- /row -->
    <div class="card">

        <form method="post" action="/{{ $post->id }}/comments">
            {{ csrf_field() }}
            <div class="form-group">

                <textarea name="body" placeholder="Your Comment Here" class="form-control"></textarea>
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>



    </div>
@endsection
