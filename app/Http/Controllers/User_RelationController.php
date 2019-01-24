<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User_Relation;
use App\User;

class User_RelationController extends Controller
{
     public function vrienden()
        {
            $vrienden = \App\User::All();
            return view('vriendtoevoegen', ['users' => $vrienden]);
        }

                                    
     public function vriendtoevoegen(Request $request)
    {
         //get user id from post
         $vriend = $request->input('vriend'); 
         //make new user relation
        $gebruikersrelatie = new User_Relation();
         //add current user id and new user id
         $gebruikersrelatie->gebruiker = Auth::id();
        $gebruikersrelatie->vriend = $vriend;   
    
        
        $gebruikersrelatie = User_Relation::updateOrCreate(['vriend' => $vriend, 'gebruiker'=> Auth::id(),'gebruiker' => $vriend, 'gebruiker'=> Auth::id()]);
         $gebruikersrelatie->save();
         //save model
         //redirect

        return \Redirect::to('profiel');
    }
    
    public function vriendToevoegenMail($gebruiker_id, $vriend_id) {
        $gebruiker = User::findOrFail($gebruiker_id);
        $gebruiker->vrienden()->attach($vriend_id);
        
        return redirect()->route('vriendkiezen');
    }
    
      protected function validator(array $data)
    {
        return Validator::make($data, [
            'vriend' => ['required','unique:users_relations'],
        ]);
      }
}