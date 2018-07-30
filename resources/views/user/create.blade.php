@extends('layouts.master')

@section('content')

    <article>
    	<form  method="POST" action="/register">
            {{ csrf_field() }}
            <h2 class="form-signin-heading">Please Register</h2>
          <div class="form-group">
              <label for="username">Name</label>
              <input class="form-control" type="text" name="name" required>
              <small class="form-text text-muted">Please enter your desired username</small>
          </div><!-- /form-group -->

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" required>
                <small class="form-text text-muted">Please provide your email address.</small>
            </div><!-- /form-group -->

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" required>
                <small class="form-text text-muted">Please provide a password.</small>
            </div><!-- /form-group -->

            <div class="form-group">
                <label for="password">Password Confirmation</label>
                <input class="form-control" type="password_confirmation" name="password_confirmation" required>
                <small class="form-text text-muted">Please confirm your password</small>
            </div><!-- /form-group -->'

            <button type="submit" class="btn btn-primary">Register</button>


            @include('partials.errors')
    	</form>
      </article>

@endsection
