<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

            return view('spel', ['spelletje' => $spelletje, 'vrtekst' => $vrtekst]);

            //return view('spel')->with('vrtekst',$vrtekst)->with('spelletje',$spelletje);

            //return view('spel')->with(compact('vrtekst','spelletje'));
            
            }

}
