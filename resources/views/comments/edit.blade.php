@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit the comment</div>

                    <div class="panel-body">

                        <form method="POST" action="{{route('comment.update', [$comment->id])}}"
                              class="form-horizontal">
                            <fieldset>
                                <br>
                            @include('messages.errors')

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="content">Content of your article</label>
                                    <div class="col-md-7">
                    <textarea class="form-control" rows="4" placeholder="Content" id="content"
                              name="content">{{$comment->content}}</textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <br>
                                        <center>
                                            <button id="singlebutton" name="singlebutton" type="submit" class="btn btn-primary">Update
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </fieldset>
                        </form>


                        <form method="POST" action="{{route('comment.destroy', [$comment->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Supprimer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

