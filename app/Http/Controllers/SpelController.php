<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpelController extends Controller
{
    public function spelkeuze()
        {
            $spelletjes = \App\Spelletje::All();

            return view('spelkeuze', ['spelletjes' => $spelletjes]);
        }

        public function spel($id){
            $spelletje = \App\Spelletje::find($id);
            return view('spel', ['spelletje' => $spelletje]);
            }

}
