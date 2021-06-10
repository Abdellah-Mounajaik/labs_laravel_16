@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le titre</h1>
    <form class="container text-center" method="POST" action="{{route('titrefeature.update', $titrefeatures->id)}}">
        @csrf
        @method('PUT')
        <label for="titre">Titre :</label>
        <input name="titre" value="{{$titrefeatures->titre}}" class="form-control" type="text">
        <p style="font-weight: bold">Mettre le mot surligner entre parenthèse !</p>
        <button class="btn btn-success my-3">Modifer</button>
    </form>
@endsection