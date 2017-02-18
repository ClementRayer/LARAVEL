@extends('layouts.app')

@section('content')

@foreach($articles as $article)

    <center><h2><a href="/article/{{$article->id}}">{{$article->title}}:</a></h2></center>

    <center><p>{{$article->content}}</p></center>

    <center><p> Written by: <a href="/user/{{$article->user_id}}">{{$article->user->name}}</a></p></center>

@endforeach

<center>{{$articles->links()}}</center>

@endsection