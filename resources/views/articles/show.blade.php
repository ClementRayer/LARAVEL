@extends('layouts.app')


@section('content')
    <center><h2>{{$article->title}}:</h2></center>
    
    <p>{{$article->content}}</p>

    <p>Written by: {{$article->user->name}}</p>
    
    <ul>
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/article/{{$article->id}}">
            Partager sur Facebook
        </a>
        <br>
        <a href="https://twitter.com/intent/tweet/?url=http://127.0.0.1:8000/article/{{$article->id}}&text=Regardez cet article!">
            Partager sur Twitter
        </a>
    </ul>
@endsection
