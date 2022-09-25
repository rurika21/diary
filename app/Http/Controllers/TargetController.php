<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $input = $request['target'];
        $input['user_id']=Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Target $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(TargetRequest $request, Target $post)
    {
        $input_post = $request['target'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    public function delete(Target $post)
    {
        $post->delete();
        return redirect('/');
    }
}