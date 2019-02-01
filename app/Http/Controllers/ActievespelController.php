<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\PendingMail;
use Illuminate\Support\Facades\Auth;
use App\User_Relation;
use App\Actievespelletje;
use App\User;
use App\Spelletje;
use App\ActievespelletjeUser;
use App\Mail\SpelAccepteren;


class ActievespelController extends Controller
{
   public function actiefspeltoevoegen (Request $request)  
       
       $spelletje = \App\Spelletje::where('id', $request->input('spel'))->first();
       $actiefspel = new Actievespelletje(); 
       $actiefspel->spel_id = $spelletje->id;
       $actiefspel->host = Auth::id();
       $actiefspel->aanvangstijdstip = $request->input('aanvangstijdstip');
       $actiefspel->gamestate = 0;
       $actiefspel->save();

       $spelers = \App\User::whereIn('id', $request->input('speler'))->get();

        foreach ($spelers as $speler) {
        $spelerIds = $request->input('spelers');
        $spelers = User::findOrFail($spelerIds);
       
        foreach ($spelers as $speler)
        {
            $speler->actieveSpelletjes()->attach($actiefspel->id);
            
        }
        $hostGebr = User::findOrFail(Auth::id())->gebr_naam;
        $spelnaam = $spelletje->spel_naam;
       
       foreach($actiefspel->users as $speler) {
            Mail::to($speler->email)->send(new SpelAccepteren($actiefspel, $speler, $speler->pivot->id, $hostGebr, $spelnaam));
       }
        
       return \Redirect::to('keuze');
   }
    
    public function actiefspelaccepteren ($id) {
        $spelbevestigen = ActievespelletjeUser::findOrFail($id);
        $spelbevestigen->bevestigd = true;
        $spelbevestigen->save(); 
    
        return \Redirect::to('keuze');
    }         
   
    
}
    
    
 
