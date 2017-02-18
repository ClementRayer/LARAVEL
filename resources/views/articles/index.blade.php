@extends('layouts.app')

@section('content')

    @foreach($articles as $article)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">

                        <center><h2><a href="/article/{{$article->id}}">{{$article->title}}:</a></h2></center>

                        <center><p>{{$article->content}}</p></center>

                        <center><p> Written by: <a href="/user/{{$article->user_id}}">{{$article->user->name}}</a></p>
                        </center>

                    </div>
                </div>
            </div>
        </div>


    @endforeach

    <center>{{$articles->links()}}</center>

@endsection