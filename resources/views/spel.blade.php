<?php 
    $active_navlink = 'profiel'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')
<div class = "row">"
    <div class = "col"  id = "spel">
        Spelletje {{ $spelletje->spel_naam }}
        <img class="imgSpel" src="{{ asset('afbeeldingen/spellen/spel' . $spelletje->id . '.png') }}" alt="foto{{ $spelletje->id }}">
    </div>
    <ul><?php ?>
        @foreach($userOnline as $userOnline)
            <li>{{$userOnline->voornaam}}{{$userOnline->achternaam}}</li>
        @endforeach
    </ul>
    </div>
</div>




@endsection