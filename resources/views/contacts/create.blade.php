@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Fill the form</h4></div>

                    <form method="POST" enctype="multipart/form-data" action="{{route('contact.store')}}" class="form-horizontal">

                        <fieldset>
                            <br>
                        <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Your name</label>
                                <div class="col-md-3">
                                    {{csrf_field()}}
                                    <input id="name" name="name" type="text" placeholder="Name"
                                           class="form-control input-md">
                                </div>
                                <label class="col-md-2 control-label" for="first_name">Your first name</label>
                                <div class="col-md-3">
                                    {{csrf_field()}}
                                    <input id="first_name" name="first_name" type="text" placeholder="First name"
                                           class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Your e-mail address</label>
                                <div class="col-md-8">
                                    {{csrf_field()}}
                                    <input id="email" name="email" type="text" placeholder="E-mail address"
                                           class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="first_name">Your object</label>
                                <div class="col-md-8">
                                    {{csrf_field()}}
                                    <input id="object" name="object" type="text" placeholder="Object"
                                           class="form-control input-md">
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" placeholder="Message" id="message"
                                              name="message"></textarea>
                                </div>
                            </div>



                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Send your form</label>
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