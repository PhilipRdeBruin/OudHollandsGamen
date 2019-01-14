
<?php 
    $active_navlink = 'homepage';
    $spelletjes = App\Spelletje::All();
?>

@extends('layouts.standaard')
@section('content')
    <div>
        <div id="spel-pagina">

            @foreach ($spelletjes as $spelletje)
                <div class="card-body div-spel">
                    <a href="/spel/{{ $spelletje->id }}">
                    <button type="button" class="knop-spel" >
                        <img class="img-spel" src="{{ asset('afbeeldingen/spellen/spel' . $spelletje->id . '.png') }}" alt="foto{{ $spelletje->id }}">
                    </button>
                    <p class="label-spel">{{ $spelletje->spel_naam }}</p>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
    
    <div style="clear:left;margin-top:100px;color:white">
        <p>x</p>
    </div>
    @include('includes.vraag')   
@endsection
