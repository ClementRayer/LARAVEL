@extends('layouts.app')

@section('content')

    <h1>Écrire un article</h1>

    @include('messages.errors')

    <form method="POST" action="{{route('article.store')}}">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Titre">
        <br>
        <textarea name="content" id="" cols="30" rows="5" placeholder="Contenu"></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>


@endsection