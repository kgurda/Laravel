@extends('layouts.master')

@section('content')

    <h1>{{$post->title}}</h1>

    {{ $post->body }}

    <hr>

    <div class="comments">

        <ul class="list-group">

            @foreach($post->comments as $comment)

                <li class="list-group-item">

                    <strong>

                        {{$comment->created_at->diffForHumans()}} : &nbsp

                    </strong>

                    {{$comment->body}}
                </li>

            @endforeach

        </ul>

        <hr>

        {{--  add a comment  --}}

        <div class="card">

            <div class="card-block">

                <form method="post" action="/posts/{{$post->id}}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <textarea name="body" id="comment-body" class="form-control" placeholder="Comment"></textarea>

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Add comment</button>

                    </div>

                    @include('layouts.errors')

                </form>

            </div>

        </div>


    </div>

@endsection