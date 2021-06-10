@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container" enctype="multipart/form-data" method="POST" action="{{route('testi.update', $hometesti->id)}}">
        @csrf
        @method('PUT')
        <label for="image">Image</label><br>
        <input name="image" type="file"><br><br>

        <label for="nom">Nom</label>
        <input class="form-control" value="{{$hometesti->nom}}" name="nom" type="text">
        <label for="fonction">Fonction</label>
        <input class="form-control" value="{{$hometesti->fonction}}" name="fonction" type="text">
        <label for="texte">Texte</label>
        <input class="form-control" name="texte" value="{{$hometesti->texte}}" type="text">
        <button class="btn btn-success my-3">Modiffier</button>
    </form>
@endsection