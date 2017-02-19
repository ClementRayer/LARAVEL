@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Write a new article</h4></div>

                    <form method="POST" enctype="multipart/form-data" action="{{route('article.store')}}"
                          class="form-horizontal">

                        <fieldset>
                            <br>
                            @include('messages.errors')
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title of your article</label>
                                <div class="col-md-6">
                                    {{csrf_field()}}
                                    <input id="title" name="title" type="text" placeholder="Title"
                                           class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="content">Content of your article</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="Content" id="content"
                                              name="content"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="content">Image of your article</label>
                                <input name="thumbnail" id="thumbnail" type="file">
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Send your article</label>
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