@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Testimonial</h1>

    <div class="testimonial-section pb100">
        <div class="test-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="section-title left">
                        @foreach ($hometitretesti as $item)
                            <h2>{{$item->titre}}</h2>                        
                        @endforeach
                    </div>
                    <div class="owl-carousel" id="testimonial-slide">
                        <!-- single testimonial -->
                        @foreach ($hometesti as $item)
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                                
                            <p>{{$item->texte}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('img/' . $item->image)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$item->nom}}</h2>
                                    <p>{{$item->fonction}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section end-->
    
@endsection