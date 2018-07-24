@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col mt-5">
            <h1>Login</h1>

            @include('partials.errors');

            <form action="{{ url('login') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="elisabeth.moss@yrgo.se">
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="email">Password</label>
                    <input class="form-control" type="password" name="password">
                </div><!-- /form-group -->

                <button class="btn btn-primary" type="submit">Login</button>
            </form><!-- / -->
        </div><!-- /col -->
    </div><!-- /row -->
@stop
