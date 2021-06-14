@extends('adminlte::page')
@section('content')
<div class="text-center">
    <h1>Profil de la personne connecté :</h1>
    <h1>Nom : {{Auth::user()->nom}}</h1>
    <h1>Description : {{Auth::user()->description}}</h1>
    <h1>Genre : {{Auth::user()->genre->genre}}</h1>
    <h1>Role : {{Auth::user()->role->role}}</h1>
    <h1>Poste : {{Auth::user()->poste->poste}}</h1>
    <img src="{{asset('img/' . Auth::user()->image)}}" alt="">
</div>
@endsection