<?php 
    namespace App\Http\Controllers;
    $active_navlink = 'profiel'; 
    $filterkey = "filter";
    $vrienden = \App\User::All();
    $spelletjes = \App\Spelletje::All();
    use \App\Spelletje;
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

    <div class="row justify-content-center" id = "profielweergave">
        <div class="col-md-5">

            <div class="card">

                <div class="card" style="width: 29rem;">

                <div class="card-header" style="text-align:center"><b>Profiel</b></div>
                
                    <div class="card-body">
                
            
                        <h6 style="text-align:center"> Dit zijn uw gegevens, indien u wilt kunt u ze aanvullen</h6> 
                            <form method="POST" action="{{ route('profiel.update') }}">
                            @csrf
                            @method('PUT')
                            <div class = "form-group row">                        
                                <label for="gebr_naam" class="col-md-4 col-form-label text-md-right">{{ __('Gebruikersnaam') }}</label>
                                <div class="col-md-8"  >
                                <input id="gebr_naam" type="text" class="form-control{{ $errors->has('gebr_naam') ? ' is-invalid' : '' }}" style="color:#46f; font-weight:bold" name="gebr_naam" value="{{ $user->gebr_naam }}" >
                                    @if ($errors->has('gebr_naam'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gebr_naam') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                        <div class="form-group row">
                            <label for="voornaam" class="col-md-4 col-form-lael text-md-right">{{ __('Voornaam') }}</label>
                                <div class="col-md-8">
                                <input id="voornaam" type="text" class="form-control{{ $errors->has('voornaam') ? ' is-invalid' : '' }}" name="voornaam" value="{{ $user->voornaam }}" >

                                @if ($errors->has('voornaam'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('voornaam') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="initialen" class="col-md-4 col-form-label text-md-right">{{ __('Initialen') }}</label>
                            <div class="col-md-8">
                                <input id="initialen" type="text" class="form-control{{ $errors->has('initialen') ? ' is-invalid' : '' }}" name="initialen" value="{{ $user->initialen }}">

                                @if ($errors->has('initialen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('initialen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tussenv" class="col-md-4 col-form-label text-md-right">{{ __('Tussenvoegsel') }}</label>
                            <div class="col-md-8">
                                <input id="tussenv" type="text" class="form-control{{ $errors->has('tussenv') ? ' is-invalid' : '' }}" name="tussenv" value="{{ $user->tussenv }}">

                                @if ($errors->has('tussenv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tussenv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="achternaam" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>
                            <div class="col-md-8">
                                <input id="achternaam" type="text" class="form-control{{ $errors->has('achternaam') ? ' is-invalid' : '' }}" name="achternaam" value="{{ $user->achternaam }}" >

                                @if ($errors->has('achternaam'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('achternaam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      

                        <div class="form-group row">
                            <label for="huisnummer" class="col-md-4 col-form-label text-md-right">{{ __('Huisnummer') }}</label>

                            <div class="col-md-8">
                                <input id="huisnummer" type="text" class="form-control{{ $errors->has('huisnummer') ? ' is-invalid' : '' }}" name="huisnr" value="{{ $user->huisnr }}">

                                @if ($errors->has('huisnummer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('huisnummer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">{{ __('Postcode') }}</label>

                            <div class="col-md-8">
                                <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{ $user->postcode }}" >

                                @if ($errors->has('postcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="woonplaats" class="col-md-4 col-form-label text-md-right">{{ __('Woonplaats') }}</label>

                            <div class="col-md-8">
                                <input id="woonplaats" type="text" class="form-control{{ $errors->has('woonplaats') ? ' is-invalid' : '' }}" name="woonplaats" value="{{ $user->woonplaats }}">

                                @if ($errors->has('woonplaats'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('woonplaats') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="telefoon" class="col-md-4 col-form-label text-md-right">{{ __('Telefoon-nummer') }}</label>

                            <div class="col-md-8">
                                <input id="telefoon" type="text" class="form-control{{ $errors->has('telefoon') ? ' is-invalid' : '' }}" name="telefoon" value="{{ $user->telefoon }}">

                                @if ($errors->has('telefoon'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefoon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobielnr" class="col-md-4 col-form-label text-md-right">{{ __('Mobiel-nummer') }}</label>

                            <div class="col-md-8">
                                <input id="mobielnr" type="text" class="form-control{{ $errors->has('mobielnr') ? ' is-invalid' : '' }}" name="mobiel" value="{{ $user->mobiel }}">

                                @if ($errors->has('mobielnr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobielnr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adres') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                                               
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('updaten van uw gegevens') }}
                                </button>
                            </div>
                            </div>
                            </form>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="knop-mpl knop-inlog" onclick="document.location='/vriendtoevoegen'">Vriend toevoegen<br/><span class="px-14"></span></button>
        </div>
    
            <div class="col-md-3">
                <div class="card mt-4">

                    <div class="card-header" style="text-align:center"><b>Vrienden</b>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="row justify-content-center">
                   <select>
                        @foreach($user->vrienden as $vriend)

                       
                       
                         <?php 
                        $vn=$vriend->voornaam;
                        $tv=($vriend->tussenv != NULL) ? " " . $vriend->tussenv : "" ;
                        $an=$vriend->achternaam;
                        $vrienden=$vn.$tv. " " . $an;
           
                        ?>
                       
                       <option value="{{$vriend->id}}">{{$vrienden}}</option>
                        @endforeach 
                       
         
                             @foreach($user->vriendenReverse as $gebruiker)
                       
                    <?php 
                        $vn=$gebruiker->voornaam;
                        $tv=($gebruiker->tussenv != NULL) ? " " . $gebruiker->tussenv : "" ;
                        $an=$gebruiker->achternaam;
                        $vrienden=$vn.$tv. " " . $an;
           
                            ?>
                                
                        <option value="{{$gebruiker->id}}">{{$vrienden}}</option>
                        @endforeach 
                            </select>
                         </div>   
                            
                    <div class="row justify-content-center mt-3">
                        <a href="#" class="btn btn-primary">Spelen</a>
                    </div>
        
                    
                    </div> 
                </div>
             <div class="card mt-5">
                 <div class="card-header" style="text-align:center"><b>mijn leukste spel is:</b>
                   
                       
                            <ul class = 'ProfielFavSpel' >
                                @foreach($spelletjes as $spelletje)
                                  <li onclick = "showFoto({{$spelletje->id}})">{{ $spelletje->spel_naam }} </li>
                                @endforeach
                            </ul>
                      
                  
                </div>
                <div class="card-body"> 
                    <p id = "SpelFoto" > </p>               
                    
                            <script>                                  
                               
                                    function showFoto(y) {
                                        var x = document.createElement("IMG");
                                        x.setAttribute("src", `afbeeldingen/spellen/spel${y}.png` );
                                        x.setAttribute("width", "20");
                                        x.setAttribute("height", "20");
                                        x.setAttribute("alt", "Foto van uw favouriete spel");
                                        document.getElementById("SpelFoto").innerHTML = x;
                                    }
                                
                            </script>

                                            
                    </div>
                </div>
            </div>          
        </div>            
    </div>
</div>   
@endsection