<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_Relation extends Controller
{
     public function vrienden()
        {
            $vrienden = \App\User::All();

            return view('profiel', ['users' => $vrienden);
        }
}
                                    
     public function vriendtoevoegen()
    {
            $gebruiker = input::get($act_lnk) 
            
            $vriend->gebruiker  = $gebruiker;    
            $vriend->nv_id      = Input::get('vriend');
        
            $vriend->save();

        return \Redirect::to('profiel');
        
    };
