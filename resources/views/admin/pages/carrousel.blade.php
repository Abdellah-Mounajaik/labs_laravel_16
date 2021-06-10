@extends('adminlte::page')
@section('content')
    <h1 class="text-center my-4">Carrousel</h1>

    <div class="container">
        <div class="row">
            @foreach ($carrousels as $carrousel)
            <div class="text-center  col-6" >
                <img style="height: 400px" class="card-img-top" src="{{asset('img/' . $carrousel->image)}}" alt="">
                    <p class="my-2">{{$carrousel->phrase}}</p>
                    <button class="btn btn-success"><a class="text-white" href="{{route('homeCarrousel.edit', $carrousel->id)}}">Modiffier</a></button>
                </div>
                @endforeach
            </div>
    </div>
    <div class="text-center my-4">
        <h1>Logo</h1>
        @foreach ($logos as $logo)
            <img height="100px" class="my-5" src="{{asset('/' . $logo->logo)}}" alt=""><br>
            <button class="btn btn-success"><a class="text-white" href="{{route('logo.edit', $logo->id)}}">Moddifer</a></button> <br>
            @endforeach
    </div>
@endsection