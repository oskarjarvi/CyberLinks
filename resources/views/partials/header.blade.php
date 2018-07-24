<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/main.css">
</head>

<body>
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li><!-- /nav-item -->

                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About</a>
                        </li><!-- /nav-item -->
                    </ul>

                    <ul class ="navbar-nav ml-auto justify-content-end">
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                            </li><!-- /nav-item -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('create')}}">Create Posts</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('profile')}}">Profile</a>
                            </li>

                        @else

                            <li class="nav-item {{ request()->path() === 'login' ? 'active' : '' }}">

                                <a class="nav-link" href="{{ url('login') }}">Login</a>
                            </li><!-- /nav-item -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('sign')}}">Sign up</a>
                            </li><!-- /nav-item -->
                        @endif
                    </ul>
                </div>
            </nav>
