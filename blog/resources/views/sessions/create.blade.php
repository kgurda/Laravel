@extends('layouts.master')


@section('content')

    <h1>Register</h1>

    <form method="post" action="/register">
        {{ csrf_field() }}

        <div class="form-group">

            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">

        </div>

        <div class="form-group">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email">

        </div>

        <div class="form-group">

            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primaryl">Register</button>

        </div>

        @include('layouts.errors')


    </form>


@endsection