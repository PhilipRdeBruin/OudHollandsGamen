
<?php 
//    $active_navlink = 'homepage'; 
?>

@extends('layouts.standaard')
@section('content')

<div id="main">
            <div id="choice">
                <div id="friends">
                    <div class="spacer"></div>
                    <div class="title">
                            <div id="arrowleft">
                                </div>
                        <h2 class="left">
                            Speel samen<br>
                            met vrienden
                        </h2>
                    </div>
                </div>
                <div id="game" onclick="location.href='/spelkeuze'">
                        <div class="spacer"></div>
                    <div class="title">
                            <div id="arrowright">
                                </div>
                        <h2 class="right">
                            Kies direct <br>
                            een spel uit
                        </h2>

                    </div>
                </div>
                <div class="clear"></div>
                <div id="of" onclick="notify()">
                    <h3>OF</h3>
                </div>
            </div>
            @if(!empty($actievespellen))
            <div id="notifications">
                @foreach($actievespellen as $actiefspel)
                    <div class="notification">
                        <p style="width:80%;line-height:2">{{ $actiefspel->spelletje->spel_naam }} <br> {{ $actiefspel->aanvangstijdstip }}</p>
                        <div onclick="document.getElementById('actspel').submit()" class="spelen">
                            <p>Speel</p>
                        </div>
                        <form id="actspel" method="POST" action="{{ $actiefspel->spelletje->link }}">
                            <input type="hidden" name="act_spel" value="{{ $actiefspel->id }}">
                            <input type="hidden" name="speler" value="{{ $gebruiker->id }}">
                        </form>
                    </div>
                    @endforeach
                    </div>
        @endif        
@endsection

