@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-block">
        <form  method="POST" action="{{url($comment->id.'/update')}}">
            {{ csrf_field() }}
            <h4> Edit your comment </h4>
            <div class="form-group">
                <textarea class="form-control" name="body" value="{{$comment->body}}"> </textarea
                </div><!-- /form-group -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @include('partials.errors')
            </form>
        </div>
    </div>
@endsection
