@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit an article</div>

                    <div class="panel-body">

                        <form method="POST" action="{{route('article.update', [$article->id])}}"
                              class="form-horizontal">
                            <fieldset>
                                <br>
                            @include('messages.errors')
                            <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="title">Title of your article</label>
                                    <div class="col-md-4">
                                        {{csrf_field()}}
                                        <input type="hidden" value="PUT" name="_method">
                                        <input id="title" value="{{$article->title}}" name="title" type="text"
                                               placeholder="Title"
                                               class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="content">Content of your article</label>
                                    <div class="col-md-7">
                    <textarea class="form-control" rows="4" placeholder="Content" id="content"
                              name="content">{{$article->content}}</textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton">Button</label>
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


                        <form method="POST" action="{{route('article.destroy', [$article->id])}}">
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

