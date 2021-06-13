@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
        <div class="test-overlay"></div>
                    <div class="text-center">
                        <h1>Titre testimonial :</h1>
                        @foreach ($hometitretesti as $item)
                            <h2>{{$item->titre}}</h2>
                            <button class="btn btn-success"><a class="text-white" href="{{route('titretesti.edit', $item->id)}}">Modiffier</a></button>                        
                        @endforeach
                    </div>
                    <div class="owl-carousel" id="testimonial-slide">
                        <!-- single testimonial -->
                        
                        <div class="text-center container my-4">
                            <div class="row">
                                @foreach ($hometesti as $item)
                                    
                                <div class="col-4 card">
                                    <img src="{{asset('img/' . $item->image)}}" alt="">
                                    <h4>Nom : {{$item->nom}}</h2>
                                    <h5>Fonction : {{$item->fonction}}</h4>
                                    <p>{{$item->texte}}</p>
                                    <button class="btn btn-success"><a class="text-white" href="{{route('testi.edit', $item->id)}}">Modiffier</a></button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
    <!-- Testimonial section end-->

@endsection