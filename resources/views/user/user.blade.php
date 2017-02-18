@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles of</div>

                    <div class="panel-body">

                        @foreach($articles as $article)
                            <center><h2><a href="/article/{{$article->id}}">{{$article->title}}</a></h2></center>
                            <h4>Created at : {{$article->created_at}}</h4>
                            <h4>Last update : {{$article->updated_at}}</h4>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection