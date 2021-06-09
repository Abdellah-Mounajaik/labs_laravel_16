@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le titre</h1>

    <form class="container text-center" method="POST" action="{{route('hometitrecontent.update', $hometitrecontent->id)}}">
        @csrf
        @method('PUT')
        <label class="my-4" for="titre">Titre</label>
        <input value="{{$hometitrecontent->titre}}" name="titre" class="form-control" type="text">
        <button class="my-3 btn btn-success">Modiffier</button>
    </form>
@endsection