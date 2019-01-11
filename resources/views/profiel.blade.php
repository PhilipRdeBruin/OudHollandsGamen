<?php 
    $active_navlink = 'profiel'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')

<div class="container col-md-4">
<div class="row" style="text-align:center">
    <h1><span class="kl_blauw">Welkom op uw profielpagina!</span></h1><br>
    <br>
    <h4 style="text-align:left">Hier onder vindt u een overzicht van uw persoonlijke gegevens. Daarnaast een lijst van uw kennissen waarmee u spellen kunt spelen.</h4>
    <br>
    </div>
</div>
<br>
<div class="container col-md-12">
     <div class="row">
    <div class="col-md-5 justify-content-left">
        <div class="card">
            <div class="card-header">Profiel</div>
                <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
            </div>
        </div>
         </div>
<!--
         <div class="row justify-content-right">
                <div class="col-md-2">

-->
         <div class="col-md-3">
         </div>
            <div class="col-md-3 justify-content-right">
                <div class="card">
                <div class="card-header">kennis</div>
                    <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-img-overlay">
                    </div> 
                </div>
                <a href="#" class="btn btn-primary">Spelen</a>
            </div>
                    
    </div>
    </div>

  

@endsection