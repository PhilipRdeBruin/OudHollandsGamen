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
    <div class = "col">
        @if($users)
            <ul>
                @foreach($users as $user)
                    @if($user->isOnline())
                        <li>
                            <form action = "{{ route('spelSpelen', ['uitgenodigde' => $user->id , 'id' => $spelletje->id ]) }}" method = "POST" >
                                @csrf
                                
                                <li>{{$user->gebr_naam}}</li>
                                <input type = "submit" value="nodig uit">
                            </form>
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    <ul>
        
    </ul>
    </div>
</div>
@endsection