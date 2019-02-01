<?php 

$vrienden = \App\User::All();
    $spelletjes = \App\Spelletje::All();
    $active_navlink = 'keuzevrienduitnodiging'; 
    $filterkey = "filter"; 
  
  
?>

@extends('layouts.standaard')
@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6" style="text-align:center">
            <h1><span class="kl_blauw">Kennis uitnodigen</span></h1><br>
        </div>
    </div>

   
    <div class="row justify-content-center mt-5"> 
     <!--links-->       
        
        <div class="col-md-6">
            <h5 style="color:#24a;font-weight:bold">Reserveer hier een spel<br> En stuur de uitnodiging per mail naar uw medespeler(s)</h5>
    

            <form id="form_speleruitnodigen" method="post" action="{{route('actiefspeltoevoegen')}}" style="margin-top:40px">
                @csrf
                <table>
                    <tr>
                        <td style="width:200px">spel:</td>                        
                        <td>
                            <select class="form-control" name="spel" id="spel">
                                <option value="leeg" selected></option>
                                @foreach($spelletjes as $value)
                                    <option value="{{ $value->id }}">{{ $value->spel_naam }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    @for ($i=1; $i<=4; $i++)
                        <tr>
                            <td>
                                @if ($i == 1)
                                    gastheer:
                                @else
                                    speler{{ $i }}:
                                @endif
                            </td>                        
                            <td>
                                <select class="form-control" name="spelers[]" id="speler{{ $i }}">

                                    <?php
                                        $vn = Auth::user()->voornaam;
                                        $tv = (Auth::user()->tussenv != NULL) ? " " . Auth::user()->tussenv : "" ;
                                        $an = Auth::user()->achternaam;
                                        $vriendy = $vn . $tv . " " . $an;           
                                    ?> 

                                    @if ($i == 1) {
                                        <option value="{{ Auth::id() }}" selected>{{ $vriendy }}</option>
                                    @else
                                        <option value="leeg" selected></option>
                                    @endif

                                    @foreach($user->vrienden as $vriend)
                                        <?php
                                            $vn = $vriend->voornaam;
                                            $tv = ($vriend->tussenv != NULL) ? " " . $vriend->tussenv : "" ;
                                            $an = $vriend->achternaam;
                                            $vriendy = $vn . $tv . " " . $an;           
                                        ?> 
                                        <option value="{{ $vriend->id }}">{{ $vriendy }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    @endfor

                    <tr>
                        <td>aanvangstijdstip:</td>
                        <td><input type="datetime" name="aanvangstijdstip"></td>
                    </tr>
                </table>
                <input id="speluitnodigenknop" type="submit" value="Uitnodiging versturen">
            </form>

                
    
    </div>
        
    <!--rechts-->   
    <div class="col-md-4 col-md-offset-2">
        <div class="row justify-content-center md-4"> 
        <h5 style="color:#24a;font-weight:bold">Hieronder ziet uw uw vrienden die op dit moment online zijn.</h5>
        <br>
    </div>

    <div class="row">                    
                            
        @foreach($user->vrienden as $vriend) 
            @if($user->isOnline()) 
                <div class="card mt-4">   
                    <div class="card-header">
                        <?php 
                            $vn = $vriend->voornaam;
                            $tv = ($vriend->tussenv != NULL) ? " " . $vriend->tussenv : "" ;
                            $an = $vriend->achternaam;
                            $vrienden = $vn.$tv. " " . $an;           
                        ?>                       
                        <li value = "{{$vriend->id}}">{{$vrienden}}</li>
                                            
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