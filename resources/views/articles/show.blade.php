@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{$article->title}}</h4></div>
                    <center>
                        <br>
                        <p>{{$article->content}}</p><br>
                        <b>Written by <a href="/user/{{$article->user_id}}">{{$article->user->name}}</a><br><br><br></b>

                        <a class="btn btn-default" href="{{$article->id}}/edit">Edit</a>
                        <br>
                        <a class="btn btn-default" href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/article/{{$article->id}}">Share
                            on
                            Facebook</a>
                        <br>
                        <a class="btn btn-default" href="https://twitter.com/intent/tweet/?url=http://127.0.0.1:8000/article/{{$article->id}}&text=Regardez cet article!">Share
                            on Twitter</a>
                </div>
            </div>
        </div>
    </div>
@endsection