@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{$article->title}}</h4></div>
                    <center>
                        <br>
                        <p>{{$article->content}}</p><br>
                        <b>Written by <a href="/user/{{$article->user_id}}">{{$article->user->name}}</a><br><br><br></b>

                        <a class="btn btn-default" href="{{$article->id}}/edit">Edit</a>
                        <br>
                        <br>
                        <a class="btn btn-default"
                           href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/article/{{$article->id}}">Share
                            on
                            Facebook</a>
                        <br>
                        <br>
                        <a class="btn btn-default"
                           href="https://twitter.com/intent/tweet/?url=http://127.0.0.1:8000/article/{{$article->id}}&text=Regardez cet article!">Share
                            on Twitter</a>
                        <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Commentaire(s)</h4></div>

                    @foreach($article->comments as $comment)
                       <center><h4>By <a href="/user/{{$comment->user_id}}">{{$comment->user->name}}</a></h4>
                        <h5>{{$comment->created_at}}</h5>
                        <br><br>
                        {{$comment->content}}</center>
                        <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Ecrire un commentaire</h4></div>

                    @include('messages.errors')

                    <form method="POST" action="{{route('comment.store')}}" class="form-horizontal">
                        {{csrf_field()}}
                        <fieldset>
                            <br>
                        @include('messages.errors')

                        <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="content">Content of your comment</label>
                                <div class="col-md-6">
                <textarea class="form-control" placeholder="Content" id="content"
                          name="content"></textarea>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Send your comment</label>
                                <div class="col-md-4">
                                    <br>
                                    <center>
                                        <button id="singlebutton" name="singlebutton" type="submit"
                                                class="btn btn-primary">Send
                                        </button>
                                    </center>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection