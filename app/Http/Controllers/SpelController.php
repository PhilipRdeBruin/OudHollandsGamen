<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use \App\spelletje;

class SpelController extends Controller
{
    public function spelkeuze()
        {
            $vrtekst = DB::table('vraagtekens')->where('naam', 'spelkeuze')->value('vrtekst');
       
            $spelletjes = \App\Spelletje::All();

            return view('spelkeuze')->with('vrtekst',$vrtekst);
        }

        public function spel($id){

            $vrtekst = DB::table('vraagtekens')->where('naam', 'spel')->value('vrtekst');

            $spelletje = \App\Spelletje::find($id);

            $users = User::all();

            return view('spel',['users' => $users, 'spelletje' => $spelletje, 'vrtekst' => $vrtekst ]);            
            
        }

        public function spelSpelen($id,$uitgenodigde){
            
            $gebruiker = Auth::user();
            
            //nu naar spel spelen gaan met deze 3 variabelen. Route gaat nu nog naar "spel/{{spel->id}}"
            var_dump ($id,$gebruiker->id,$uitgenodigde);
            die();
        }

}
