@extends('layouts.app')

@section('content')

    <h1>Écrire un commentaire</h1>

    @include('messages.errors')

    <form method="POST" action="{{route('comment.store')}}">
        {{csrf_field()}}
        <textarea name="content" id="" cols="30" rows="5" placeholder="Contenu"></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>


@endsection