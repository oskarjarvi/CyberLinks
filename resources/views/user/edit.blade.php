@extends('layouts.master')

@section('content')

    <div class="update">
        <article>
            <form  method="POST" action="{{url('profile/'.$user->id.'/update')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Edit Your Profile</h2>
                <div class="form-group">
                    <label for="username">Name</label>
                    <input class="form-control" type="text" name="name" value="{{$user->name}}"required >
                    <small class="form-text text-muted">Please enter your desired username</small>
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" value="{{$user->email}}" required>
                    <small class="form-text text-muted">Please provide your email address.</small>
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="biography">Biography</label>
                    <input class="form-control" type="text" name="biography" value="{{$user->biography}}">
                    <small class="form-text text-muted">Please share your biography</small>
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" required>
                    <small class="form-text text-muted">Please provide a password.</small>
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input class="form-control" type="password" name="password_confirmation" required>
                    <small class="form-text text-muted">Please confirm your password</small>
                </div><!-- /form-group -->

                <div class="img_url">
                    <label for="image">Choose a Image to upload</label>
                    <input type="file" name="image">
                    <button type="submit">Upload</button>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>


                @include('partials.errors')
            </form>
        </article>

    </div>

@endsection
