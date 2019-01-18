<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User_Relation;
use App\User;

class KeuzeController extends Controller
{
    // public function spelkeuze(){
    //     return view('spelkeuze');
    //     }

    public function keuzevrienduitnodiging(){
        return view('keuzevrienduitnodiging');
        }  

    public function profiel(){
        $gebruiker = Auth::user();
        return view('profiel', ['gebruiker' => $gebruiker]);
        } 

}
