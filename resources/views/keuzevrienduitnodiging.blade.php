<?php 
    $active_navlink = 'keuzevrienduitnodiging'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')

<div class="container col-md-9">
<div class="row" style="margin:10px auto auto 20%;text-align:center">
    <h1><span class="kl_blauw"><u>Kennis uitnodigen</u></span></h1><br>
    <br>
    <h2> U heeft gekozen om een kennis uit te nodigen.<br> Hieronder ziet u overzicht van u vrienden die u kunt uitnodigen.</h2>
    <br>
    <h4> LET OP! Hieronder ziet uw alleen de vrienden die op dit moment online zijn.</h4>
   
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

<div class="container col-md-9">
<div class="row center" id="hulpinfo">
    <div id="hulptekst" style="margin-top:25px">Kunnen we u helpen</div>
    <img src="{{ asset('icons/help-icon.png') }}" alt="HULP-knop" height="100px">
    </div>
  

@endsection