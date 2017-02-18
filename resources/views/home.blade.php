@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if(Auth::check())
                            <h2>Bonjour, {{Auth::user()->name}}</h2>
                            <h3>Mail : {{Auth::user()->email}}</h3>
                            <h3>Date d'inscription : {{Auth::user()->created_at}}</h3><br>
                            <center><h3><a href="/user/{{Auth::user()->id}}">Mes articles</a></h3></center>
                        @else
                            <h2>Bonjour invité</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
