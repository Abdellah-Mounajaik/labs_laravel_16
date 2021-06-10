@extends('adminlte::page')
@section('content')
<!-- features section -->
<div class="text-center">
    @foreach ($titrefea as $item)
    <h1>titre :</h1>
    <h2 class="mb-5">{{$item->titre}}</h2>
    @endforeach
</div>
<div class="container">
    <div class="row">
        <div class="col-6">

            @foreach ($featurebis as $item)

            <div class="icon-box light">
                <div class="icon">
                    <i style="font-size: 50px" class="{{$item->icone->icone}}"></i>
                </div>
                <div class="service-text">
                    <h2>{{$item->titre}}</h2>
                    <p>{{$item->description}}</p>
                </div>
                <button class="btn btn-success"><a class="text-white" href="">Modifier</a></button>

            </div>
            @endforeach
            <div class="col-6">
                @foreach ($features as $item)
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                    <div class="icon">
                        <i style="font-size: 50px" class="{{$item->icone->icone}}"></i>
                    </div>
                    <button class="btn btn-success"><a class="text-white" href="">Modifier</a></button>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- feature item -->
    <!-- features section end-->

    @endsection
