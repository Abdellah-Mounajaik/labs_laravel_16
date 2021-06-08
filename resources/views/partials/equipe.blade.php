<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($titreequipe as $item)
            <h2>
                @php
                    $titre = str_replace('(', '<span>', $item->titre);
                        $titrebis = str_replace(')', '</span>', $titre);
                        echo $titrebis;
                @endphp

            </h2>
            @endforeach
        </div>
        <div class="row">
            <!-- single member -->
            @foreach ($homeequipe as $item)
                
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('img/' . $item->image)}}" alt="">
                    <h2>{{$item->nom}}</h2>
                    <h3>{{$item->poste->poste}}</h3>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- Team Section end-->
