@extends('layouts.app')

@section('content')

@foreach($articles as $article)

    <center><h2>{{$article->title}}:</h2></center>

    <center><p>{{$article->content}}</p></center>

    <center><p> Written by: {{$article->user->name}}</p></center>

@endforeach

<center>{{$articles->links()}}</center>

@endsection