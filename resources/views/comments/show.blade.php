@extends('layouts.app')


@section('content')

    <p>{{$comment->content}}</p>

    <p>Written by: {{$comment->user->name}}</p>

    <p>About article: {{$comment->article->title}}</p>

@endsection