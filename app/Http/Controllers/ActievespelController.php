<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User_Relation;
use \App\Actievespelletje;

class ActievespelController extends Controller
{

   public function actiefspeltoevoegen (Request $request)
   {
       // $spelletje = \App\Spelletje::where('spel_naam', $request->input('spel'))->first();
       $spelletje = \App\Spelletje::where('id', $request->input('spel'))->first();
       $actiefspel = new Actievespelletje();

       $actiefspel->spel_id = $spelletje->id;
       $actiefspel->host = Auth::id();
       $actiefspel->aanvangstijdstip = $request->input('aanvangstijdstip');
       $actiefspel->gamestate = 0;
       $actiefspel->save();
       
       // $spelers = \App\User::whereIn('gebr_naam', $request->input('speler'))->get();
       $spelers = \App\User::whereIn('id', $request->input('speler'))->get();

        foreach ($spelers as $speler) {
            // dd($actiefspel);
            $speler->actieveSpelletjes()->attach($actiefspel->id);
        }
        

       return \Redirect::to('keuze');
   }

    // public function actiefspelspelen (Request $request) {
    //     $msg = "Hallo...";
    //     echo '<script type="text/javascript">alert("' . $msg . '")</script>';

    //     $actspel_id = $request->input('id');
    //     $spel_link = \App\Spelletje::where('link', $request->input('spelid'))->first();

    //     $speler = Auth::gebr_naam();
        
    //     // $link = "SELECT link FROM spelletjes WHERE id = $spelid"


    //     return \Redirect::to($spel_link . "?roomnr=" . $actspel_id . "&speler=" . $speler);
    // }


   public function spel($id) {
       $actiefSpel = Actievespelletje::find($id);

       return view('setup_spel', ['spel_data' => $actiefSpel]);
   }
} 
