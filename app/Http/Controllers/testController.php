<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller;

class testController extends Controller
{
    public function updateProfile()
    {
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $user_id = \Auth::user()->id;
            $naam = Input::get('naam');
            $achternaam = Input::get('achternaam');
            $vriend_id = DB::table('users')->where('naam', $naam AND 'achternaam',$achternaam)->value('id');
        }
    }
}
