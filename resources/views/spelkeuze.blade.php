
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
                <button type="button" class="knop-spel" onclick="document.location='/spel{{ $spelletje->id }}'">
                    <img class="img-spel" src="{{ asset('afbeeldingen/spellen/spel' . $spelletje->id . '.png') }}" alt="foto{{ $spelletje->id }}">
                </button>
                <p class="label-spel">{{ $spelletje->spel_naam }}</p>
            </div>
        @endforeach
    </div>
</div>
    
@endsection
