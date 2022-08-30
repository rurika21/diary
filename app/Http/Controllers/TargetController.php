<?php

namespace App\Http\Controllers;

use App\Target;
use App\Http\Requests\TargetRequest; 

class TargetController extends Controller
{
    public function index(Target $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }

    public function show(Target $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Target $post, TargetRequest $request) 
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}