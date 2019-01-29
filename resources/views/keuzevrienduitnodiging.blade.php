<?php 
    namespace App\Http\Controllers; 
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration; 
    use \App\Spelletje;
    $vrienden = \App\User::All();
    $spelletjes = \App\Spelletje::All();
    $active_navlink = 'keuzevrienduitnodiging'; 
    $filterkey = "filter"; 
  
  
?>


@extends('layouts.standaard')
@section('content')

<div class="conainer">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6" style="text-align:center">
            <h1><span class="kl_blauw">Kennis uitnodigen</span></h1><br>
        </div>
    </div>

   
    <div class="row justify-content-center mt-5"> 
     <!--links-->       
        
        <div class="col-md-6">
            <h4> U heeft gekozen om een kennis uit te nodigen.<br> Hieronder ziet u overzicht van u vrienden die u kunt uitnodigen.</h4>
    
    <!--formulier van Philip-->

                
    
    </div>
        
    <!--rechts-->   
    <div class="col-md-6">
        <div class="row justify-content-center md-6"> 
            <h4>  Hieronder ziet uw alleen de vrienden die op dit moment online zijn.</h4>
        <br>
    </div>

    <div class="row">                    
                            
        @foreach($user->vrienden as $vriend) 
            @if($user->isOnline()) 
                <div class="card mt-4">   
                    <div class="card-header">
                        <?php 
                        $vn=$vriend->voornaam;
                        $tv=($vriend->tussenv != NULL) ? " " . $vriend->tussenv : "" ;
                        $an=$vriend->achternaam;
                        $vrienden=$vn.$tv. " " . $an;           
                        ?>                       
                        <li value="{{$vriend->id}}">{{$vrienden}}</li>
                                            
                    </div>

                    <div class="card-body">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-img-overlay">
                        </div> 
                    </div>                
                        <a href="#" class="btn btn-primary">Spelen</a>
                </div>
            @endif
        @endforeach

        @foreach($user->vriendenReverse as $gebruiker)
            @if($gebruiker->isOnline()) 
                <div class="card mt-4">   
                    <div class="card-header">                  
                        <?php 
                        $vn=$gebruiker->voornaam;
                        $tv=($gebruiker->tussenv != NULL) ? " " . $gebruiker->tussenv : "" ;
                        $an=$gebruiker->achternaam;
                        $vrienden=$vn.$tv. " " . $an;           
                        ?>                                
                        <option value="{{$gebruiker->id}}">{{$vrienden}}</option>
                    </div>

                    <div class="card-body">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-img-overlay">
                        </div> 
                    </div>                
                        <a href="#" class="btn btn-primary">Spelen</a>
                </div>
            @endif
        @endforeach
    </div>
                    
         

@endsection