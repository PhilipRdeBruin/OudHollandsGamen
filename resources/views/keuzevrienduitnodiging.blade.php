<?php 
    $active_navlink = 'keuzevrienduitnodiging'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')

<div class="container col-md-4">
<div class="row" style="text-align:center">
    <h1><span class="kl_blauw">Kennis uitnodigen</span></h1><br>
    <h4 style="text-align:left"> U heeft gekozen om een kennis uit te nodigen.<br> Hieronder ziet u overzicht van u vrienden die u kunt uitnodigen.</h4>
    <br>
    <h4 style="text-align:left"> LET OP! Hieronder ziet uw alleen de vrienden die op dit moment online zijn.</h4>
   
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Naam</div>
                    <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-img-overlay">
                    </div> 
                </div>
                <a href="#" class="btn btn-primary">Spelen</a>
            </div>
        </div>
                    
         <div class="col-md-4">
            <div class="card">
                <div class="card-header">Naam</div>
                    <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-img-overlay">
                    </div> 
                </div>
                <a href="#" class="btn btn-primary">Spelen</a>
            </div>
        </div>

     <div class="col-md-4">
            <div class="card">
                <div class="card-header">Naam</div>
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

<br>
<div class="container">            
    <div class="row justify-content-center">
           <div class="col-md-4">
            <div class="card">
                <div class="card-header">Naam</div>
                    <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-img-overlay">
                    </div> 
                </div>
                <a href="#" class="btn btn-primary">Spelen</a>
            </div>
        </div>
                    
          <div class="col-md-4">
            <div class="card">
                <div class="card-header">Naam</div>
                    <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-img-overlay">
                    </div> 
                </div>
                <a href="#" class="btn btn-primary">Spelen</a>
            </div>
        </div>
        
           <div class="col-md-4">
            <div class="card">
                <div class="card-header">Naam</div>
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