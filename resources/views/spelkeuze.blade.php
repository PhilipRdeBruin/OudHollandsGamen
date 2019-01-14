
<?php 
    $active_navlink = 'Spelkeuze';
    $spelletjes = App\Spelletje::All();
?>

@extends('layouts.standaard')
@section('content')

    <div id="spelkeuze-pagina">
       
        <div class="card-body div-spel" >
            @foreach ($spelletjes as $spelletje)

                <a href="/spel/{{ $spelletje->id }}">
                <button type="button" class="knop-spel" >
                    <img class="img-spel" src="{{ asset('afbeeldingen/spellen/spel' . $spelletje->id . '.png') }}" alt="foto{{ $spelletje->id }}">
                </button>
                <p class="label-spel">{{ $spelletje->spel_naam }}</p>
                </a>

            @endforeach
            
        </div>
 
    </div>
    
@endsection
