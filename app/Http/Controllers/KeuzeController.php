<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User_Relation;
use App\User;
use DB;


class KeuzeController extends Controller
{
    public function keuze(){

        $vrtekst = DB::table('vraagtekens')->where('naam', 'keuze')->value('vrtekst');   
        return view('keuze', ['vrtekst' => $vrtekst]);
    }

    public function keuzevrienduitnodiging(){

        $vrtekst = DB::table('vraagtekens')->where('naam', 'keuzevrienduitnodiging')->value('vrtekst');
        return view('keuzevrienduitnodiging',['vrtekst' => $vrtekst]);
        }  

    public function profiel(){
        $vrtekst = DB::table('vraagtekens')->where('naam', 'keuze')->value('vrtekst');
        return view('profiel', ['vrtekst'=> $vrtekst]);
    }
    
    public function profiel1(){
        $gebruiker = Auth::user();
        return view('profiel', ['gebruiker' => $gebruiker]);
        } 

}
