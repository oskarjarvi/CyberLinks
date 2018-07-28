@extends('layouts.master')

@section('content')

    <article>
    	<h1>Create a post</h1>
    	<form  method="POST" action="/posts">
            {{ csrf_field() }}
    		<div class="form-group">
    			<label for="title">Title</label>
    			<input class="form-control" type="text" name="title" placeholder="Title" required>
    		</div><!-- /form-group -->

    		<div class="form-group">
    			<label for="content">Link</label>
    			<input class="form-control" type="url" name="link" value="https://"required>
    		</div><!-- /form-group -->

    		<div class="form-group">
    			<label for="content">Text</label>
    			<input class="form-control" type="text" name="content" required>
    		</div><!-- /form-group -->
            <input type="hidden" name="user" value="{{}}">

    		<button type="submit" class="btn btn-primary">Submit</button>
            @include('partials.errors')
    	</form>
      </article>

@endsection
