@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container" method="POST" action="{{route('promotion.update', $promotion->id)}}">
        @csrf
        @method('PUT')
        <label for="titre">Titre</label>
        <input class="form-control" type="text" value="{{$promotion->titre}}" name="titre" id="titre"><br>
        <label for="description">Description</label><br>
        <input type="text" class="form-control" value="{{$promotion->description}}" name="description" id="description"><br> <br>
        <button class="btn btn-success">Modifier</button>
    </form>
@endsection