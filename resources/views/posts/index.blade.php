
@extends('layouts.app')
@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1>Life Diary</h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3>{{ $post->created_at->format('Y/m')}}</h3>
                    <p class='body'>{{ $post->content }}</p>
                </div>
            @endforeach
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
    </body>
</html>
@endsection