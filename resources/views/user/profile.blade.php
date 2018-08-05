@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        <p>Name:{{$user->name}} member since
            {{$user->created_at->toFormattedDateString()}}
        </p>
        <p>Email:{{$user->email}}</p>
        <p> Biography: {{$user->biography}}
            <hr>
            <a class="btn btn-primary" href="">Edit Profile</a>
            <a class="btn btn-danger" href=""> Delete User</a>
        </div>
        <div class="update">
            <article>
                <form  method="POST" action="{{$user->id}}/update">
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
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" required>
                        <small class="form-text text-muted">Please provide a password.</small>
                    </div><!-- /form-group -->

                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input class="form-control" type="password" name="password_confirmation" required>
                        <small class="form-text text-muted">Please confirm your password</small>
                    </div><!-- /form-group -->'

                    <div class="img_url">
                        <form action="app/user/uploadImage.php" method="post" enctype="multipart/form-data">
                            <label for="myImage">Choose a PNG image to upload</label>
                            <input type="file" name="myImage" accept=".png">
                            <button type="submit">Upload</button>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>


                    @include('partials.errors')
                </form>
            </article>

        </div>



    @endsection
