<?php
    namespace App\Http\Controllers; 
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration; 
    use Illuminate\Support\Facades\Auth;
    use \App\Spelletje;
    use \App\User;
    $vrienden = \App\User::All();
    $spelletjes = \App\Spelletje::All();
    $active_navlink = 'keuzevrienduitnodiging'; 
    $filterkey = "filter"; 

    foreach ($spelletjes as $spelletje) {
        $parameter['id'] = $spelletje->id;
        $parameter['nsplr'] = $spelletje->aantalspelers;
        $parameter['rol'] = $spelletje->rollen;
    }
?>

@extends('layouts.standaard')

@section('content')

   
    <div id="main">
                    
        <div class="KenUit">                        
            <h2>Kennis uitnodigen</h2><br>
        </div>
                    
        <div id="choice">

<!--links- form om spel te reserveren-->  
            <div  class = "KVUhelften">
                <h4 class="KVUleft">
                            Reserveer hier een spel<br> en stuur de uitnodiging per mail naar uw medespeler(s)
                </h4>
                 <div  id="formP">  
                <form  method="post" action="{{ route('actiefspeltoevoegen') }}">
                    @csrf
                    <table>
                        <tr>
                            <td class = "profielLabelKVU">spel:</td>                        
                            <td>
                                <select class="invoerLabelKVU"  onchange="showxspelers('{{ $spelletjes }}')" name="spel" id="spel">
                                    <option value="leeg" selected></option>
                                    @foreach($spelletjes as $value)
                                        <option value="{{ $value->id }}">{{ $value->spel_naam }}</option>
                                    @endforeach                                    
                                </select>
                            </td>
                            <td id="rol_hdr"><u><i>Rol/Team</u></i></td>
                        </tr>

                        @for ($i=1; $i<=4; $i++)
                            <tr>
                                <td class="profielLabelKVU">
                                    @if ($i == 1)
                                        gastheer:
                                    @else
                                        speler{{ $i }}:
                                    @endif
                                </td>                        
                                <td>
                                    <select class="invoerLabelKVU" name="speler[]" id="speler{{ $i }}">

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
                                <td>
                                    <select class="form-control" name="rol{{ $i }}" id="rol{{ $i }}">
                                        <option value="leeg" selected></option>
                                    </select>                                        
                                </td>
                            </tr>
                        @endfor

                        <tr>
                            <td  class="profielLabelKVU">aanvangstijdstip:</td>
                            <td  class="invoerLabelKVU"><input type="datetime" name="aanvangstijdstip"></td>
                        </tr>
                    </table>
                    <input id="speluitnodigenknop" class="profielLabelKVU"  type="submit" value="Uitnodiging versturen">
                </form>
                </div>
            </div>
            <div id="spelletjes" style="display:none">{{ $spelletjes}}</div>
                <script>
                    spel = document.getElementById("spel");
                    if (spel.value > 0) { 
                        spelletjes = document.getElementById("spelletjes").innerHTML;
                        showxspelers(spelletjes);
                    };
                </script>
                
<!--rechts-->

            <div class = "KVUhelften">
                <?php
                    if ($user->vrienden->count() > 0) {
                        $txt = "Hieronder ziet uw uw vrienden die op dit moment online zijn.";
                    } else {
                        $txt = "Er zijn momenteel geen vrienden van u online.";
                    }
                ?>   

                <h4 class="KVUleft">
                    Hieronder ziet uw uw vrienden die op dit moment online zijn.
                </h4>

                
                <?php $nvr = 0; ?>              
                @foreach($user->vrienden as $vriend)
                @if($vriend->isOnline())
                <?php $nvr++; ?>

                    <div class = "fromP">
                        <form id = "vriendOnlineUitnodigen" action = "{{ route('naarChat', ['vriend' => $vriend->gebr_naam ]) }}" method = "POST" onclick = "this.submit()"> 
                        @csrf    
                            <div class="vriendOnline" >
                                <div class="fotoVriend">
                                    <img src="{{ asset($vriend->foto) }}" alt="nog geen foto geupload">
                                </div> 
                                <div class = "naamVriend">
                                    <ul>
                                        <li>{{ $vriend->gebr_naam }}</li>                  
                                    </ul>
                                </div> 
                                <div class = "naarChat">                                        
                                    <p>Samen overleggen<br/> en een spel spelen</p> 
                                </div>                                      
                            </div>
                        </form>
                    </div>
                    @endif
                @endforeach
            </div>

            <p id="content_vrienden-online" style="display:none">{{ $nvr }}</p>    
        </div>

    <script>
        nvrienden = document.getElementById("content_vrienden-online").innerHTML;
        if (nvrienden > 0) {
            txt = "Hieronder ziet uw uw vrienden die op dit moment online zijn.";
        } else {
            txt = "Er zijn momenteel geen vrienden van u online.";
        }           
        document.getElementById("vriendenOnline").innerHTML = txt;
    </script>          

@endsection
                         




   
   
