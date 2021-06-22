@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Ajouter une categorie</h1>
    <form class="container" method="post" action="{{route('categorie.store')}}">
        @csrf
        <label for="categorie">Ajouter une categorie</label>
        <input name="categorie" class="@error('categorie') is-invalid @enderror form-control" type="text">
        @error('categorie')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
        <button class="mt-3 btn btn-primary">Ajouter</button>
    </form>
@endsection