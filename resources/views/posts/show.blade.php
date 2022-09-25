@extends('layouts.app')
@section('content')

<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Life Diary</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('本当に削除しますか？')">delete</button> 
        </form>
        <div class='post'>
            <p class='body'>{{ $post->body }}</p>
            <p class='updated_at'>{{ $post->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>
@endsection