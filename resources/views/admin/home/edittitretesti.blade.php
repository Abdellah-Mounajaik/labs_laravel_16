@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le titre</h1>
    <form method="POST" class="text-center container" action="{{route('titretesti.update', $hometitretesti->id)}}">
        @csrf
        @method('PUT')
        <label for="titre">Titre</label>
        <input value="{{$hometitretesti->titre}}" class="form-control" name="titre" type="text">
        <button class="btn btn-success my-3">Modiffier</button>
    </form>
@endsection