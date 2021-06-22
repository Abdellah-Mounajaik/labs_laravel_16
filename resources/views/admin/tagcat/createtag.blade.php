@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Ajouter un tag</h1>
    <form class="container" method="post" action="{{route('tag.store')}}">
        @csrf
        <label for="tag">Ajouter un tag</label>
        <input name="tag" class="@error('tag') is-invalid @enderror form-control" type="text">
        @error('tag')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="mt-3 btn btn-primary">Ajouter</button>
    </form>
@endsection