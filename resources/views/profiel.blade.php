<?php 
    $active_navlink = 'profiel'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')

<div class="container">
    <div class="row justify-content-center mt-4">
<div class="container col-md-4" style="text-align:center">
      <h1><span class="kl_blauw">Welkom op uw profielpagina!</span></h1><br>
        </div>
    </div>
      <div class="row justify-content-center">
          <div class="container col-md-8" style="text-align:center">
    <h4>Hier onder vindt u een overzicht van uw persoonlijke gegevens. Daarnaast een lijst van uw kennissen waarmee u spellen kunt spelen.</h4>
    </div>
</div>
<br>
    <div class="row justify-content-center">
            <div class="col-md-5">
        <div class="card mt-4">
            <div class="card-header">Profiel</div>
                <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
         </div>
                </div>
        </div>
        <div class="col-md-4"></div>
            <div class="col-md-3">
                <div class="card mt-4">
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
    </div>

  
    @include('includes.vraag')
@endsection