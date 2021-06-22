@extends('adminlte::page')

@section('title', 'AdminLTE')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 style="color: #2be6ab" class="text-center">Bienvenue dans le BackOffice du Labs</h1>
                </div>
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{asset('img/big-logo.png')}}" alt="">
            </div>
            <h1 class="text-center">Bonjour {{Auth::user()->nom}}</h1>
        </div>
    </div>
@stop
