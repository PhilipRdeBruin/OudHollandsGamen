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
        $spel = new Actievespelletje();
        
        //dd($request->input('spel'));
        $spelletje = \App\Spelletje::where('spel_naam', $request->input('spel'))->first();
        $speler2 = \App\User::where('gebr_naam', $request->input('speler2'))->first();
        $speler3 = \App\User::where('gebr_naam', $request->input('speler3'))->first();
        $speler4 = \App\User::where('gebr_naam', $request->input('speler4'))->first();
        
        $spel->spel_id = $spelletje->id; 
        $spel->user_id1 = Auth::id();
        $spel->user_id2 = $speler2->id;
//        $spel->user_id3 = $speler3->id->nullable;
//        $spel->user_id4 = $speler4->id->nullable;
        $spel->aanvangstijdstip = $request->input('aanvangstijdstip');  

        $spel->save();
        
        return \Redirect::to('setup_spel/' . $spel->id);
    }
    
    public function spel($id) {
        $actiefSpel = Actievespelletje::find($id);
        
        return view('setup_spel', ['spel_data' => $actiefSpel]);
    }
}