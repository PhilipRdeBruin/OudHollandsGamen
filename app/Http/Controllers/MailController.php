<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Vriendtoevoegen;
use Illuminate\Support\Facades\Auth;
use App\User;

class MailController extends Controller
    
{
   public function mailvriendtoevoegen(Request $request) {
       $vriend_id = $request->input('vriend');
       $gebruiker_id = Auth::user()->id;
       $vriend_email = User::findOrFail($vriend_id)->email;
       Mail::to($vriend_email)->send(new Vriendtoevoegen($gebruiker_id, $vriend_id));
       
       return redirect('/profiel');
   }
}

