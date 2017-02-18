@extends('layouts.app')

@section('content')

@foreach($comments as $comment)

    <center><p>{{$comment->content}}</p></center>

    <center><p> Written by: {{$comment->user->name}}</p></center>

@endforeach

<center>{{$comments->links()}}</center>

@endsection