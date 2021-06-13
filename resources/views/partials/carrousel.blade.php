<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        @foreach ($carrousels as $carrousel)
        <div class="hero-center">
            @foreach ($logos as $logo)
                <img src="{{asset('img/' . $logo->logo)}}" alt="">
            @endforeach
                <p>{{$carrousel->phrase}}</p>
                
            </div>
        </div>
        <!-- slider -->
        <div id="hero-slider" class="owl-carousel">
            <div class="item  hero-item" data-bg="{{asset('img/' . $carrousel->image)}}"></div>
        </div>
        @endforeach
</div>
<!-- Intro Section -->