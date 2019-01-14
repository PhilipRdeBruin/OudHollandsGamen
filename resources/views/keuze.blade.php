
<?php 
    $active_navlink = 'homepage'; 
?>

@extends('layouts.standaard')
@section('content')
    
<div class="row welkomknoppen">
        <div class="col-md-6">
            <div class="center" style="width:15%">
                <button type="button" class="knop-mpl knop-keuze" onclick="document.location='/keuzevrienduitnodiging'">
                    Ik wil <u><i>eerst</i></u> iemand<br/>
                    <span class="px-24"><i>(of meerdere personen)</i></span>
                    uitnodigen om mee te spelen
                </button>
                <div class="keuze-label">
                    En daarna kiezen we er een spel bij
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="center" style="width:80%">
                <button class="knop-mpl knop-keuze" onclick="document.location='/spelkeuze'">
                    Ik wil <u><i>eerst</i></u> een spel kiezen
                </button>
                <div class="keuze-label">
                    En daarna nodig ik er &#233;&#233;n 
                    <span class="px-20"><u><i>(of meerdere)</i></u></span>
                     medespeler<span class="px-20">(s)</span> bij uit
                </div>
            </div>
        </div>
    </div>
    @include('includes.vraag')
@endsection

