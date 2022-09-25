@extends('layouts.app')
@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Life Diary</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h6>内容</h6>
                <textarea name="targets[content]" placeholder="日記の内容">{{ old('target.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('target.content') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection