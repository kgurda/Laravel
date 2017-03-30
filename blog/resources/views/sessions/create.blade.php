@extends('layouts.master')


@section('content')


    <h1>Sign in</h1>


    <form method="post" action="/login">
        {{ csrf_field() }}

        <div class="form-group">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">

            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primaryl">Sign in</button>

        </div>


        @include('layouts.errors')


    </form>

@endsection