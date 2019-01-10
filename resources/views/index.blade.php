
<?php 
    $active_navlink = 'homepage'; 
?>

@extends('layouts.standaard')

@section('content')

    <div class="row" style="margin:100px auto auto 20%;text-align:center">
        <h2 class="kl_dgrijs" id="welkom">D&#233; <span class="kl_blauw"><b>Spelletjes</b></span> website 
            waar je <span class="kl_oranje"><u>m&#233;t</u></span> elkaar en 
            <span class="kl_oranje"><u>tegen</u></span> elkaar<br/>
            traditionele spelletjes kunt spelen alsof je bijelkaar aan tafel zit.</h2>
    </div>

    <div class="row welkomknoppen">
        <div class="col-md-6">
            <div class="center" style="width:8%">
                <button type="button" class="knop-mpl knop-inlog" onclick="document.location='/login'">Inloggen<br/><span class="px-28">(Ik ben<br/> reeds lid)</span></button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="center" style="width:70%">
                <button class="knop-mpl knop-inlog" onclick="document.location='/register'">Aanmelden<br/>als<br/>nieuw lid</button>
            </div>
        </div>
    </div>

    <div class="row center" id="hulpinfo">
        <img src="{{ asset('icons/help-icon.png') }}" alt="HULP-knop" height="100px">
        <div id="hulptekst">Indien u ergens vragen over heeft of assistentie bij verlangt, kunt u met deze knop hulp opvragen.</span>
    </div>
 
@endsection
