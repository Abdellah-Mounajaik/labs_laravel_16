@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier la carte</h1>
    <form method="POST" class="text-center py-5 container" action="{{route('card.update', $homeCarte->id)}}">
        @csrf
        @method('PUT')
        <label for="">Icone</label><br>
        <select name="" id=""><br>
            @foreach ($icone as $icon)
                <option value="">{{$icon->icone}}</option><br>                
            @endforeach
        </select><br>
        <label for="">Titre</label><br>
        <input class="form-control" type="text"><br>
        <label for="">Description</label><br>
        <input class="form-control" type="text">
        <button class="btn btn-success mt-3">Modffier</button>
    </form>
@endsection