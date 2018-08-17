@extends('layouts.master')

@section('content')

    <article>
    	<h1>Create a post</h1>
    	<form  method="POST" action="/posts">
            {{ csrf_field() }}
    		<div class="form-group">
    			<label for="title">Title</label>
    			<input class="form-control" type="text" name="title" placeholder="Title" required>
                <small class="form-text text-muted">Enter your title here</small>
    		</div><!-- /form-group -->

    		<div class="form-group">
    			<label for="link">Link</label>
    			<input class="form-control" type="url" name="link" value="https://"required>
                <small class="form-text text-muted">Enter your link here</small>

    		</div><!-- /form-group -->

    		<div class="form-group">
    			<label for="content">Text</label>
    			<input class="form-control" type="text" name="content" required>
                <small class="form-text text-muted">Enter your content here</small>

    		</div><!-- /form-group -->

    		<button type="submit" class="btn btn-primary">Submit</button>
            @include('partials.errors')
    	</form>
      </article>

@endsection
