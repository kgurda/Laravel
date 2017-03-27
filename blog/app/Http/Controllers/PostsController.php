<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //create new post, save and redirect to the home page

//        $post = new Post;
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//
//        ]);

        Post::create(request(['title', 'body']));

        return redirect('/');
    }
}
