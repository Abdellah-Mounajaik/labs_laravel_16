<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($hometitreequipe as $item)
                <h2>{{$item->titre}}</h2>                
            @endforeach
        </div>
        <div class="row">
            <!-- single member -->
            @foreach ($homeequipe as $item)
                
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$item->image}}" alt="">
                    <h2>{{$item->nom}}</h2>
                    <h3>{{$item->poste->poste}}</h3>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- Team Section end-->
