@extends('adminlte::page')

@section('title', 'AdminLTE')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Bienvenue dans le BackOffice</h1>
                </div>
            </div>
            <h1 class="text-center">Salut {{Auth::user()->nom}}</h1>
            <h6 class="text-center">dsl pour le desginer éclater</h6>
        </div>
    </div>
@stop
