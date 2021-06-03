<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logos as $logo)
                <img src="{{  $logo->logo}}" alt="">
            @endforeach
            @foreach ($carrousels as $carrousel)
                <p>{{$carrousel->phrase}}</p>
                
            </div>
        </div>
        <!-- slider -->
        <div id="hero-slider" class="owl-carousel">
            <div class="item  hero-item" data-bg="{{"img/" . $carrousel->image}}"></div>
        </div>
        @endforeach
</div>
<!-- Intro Section -->