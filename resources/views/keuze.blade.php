<?php 
    $active_navlink = 'homepage'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')
    


<div class="row" style="margin:100px auto auto 100px">
    <h1>Mijn Oud Hollandse Spelletjes site</h1>
</div>
<div class="row">
    <div class = "col-6">
        <a href = "{{ route('spelkeuze') }}"><h1>Klik op deze woorden als u een spel wilt spelen</h1></a>
    </div>
    <div class = "col-6">
        <a href = "{{ route('keuzevrienduitnodiging) }}"><h1>Klik op deze woorden als u iemand wilt uitnodigen om met u te spelen</h1></a>
    </div>
</div>

<div class = "profiellink">
    <a href = "{{ route(profiel) }}"><h4>Klik hier om naar uw eigen profielpagina te gaan</h4></a>
</div>
    
@endsection

