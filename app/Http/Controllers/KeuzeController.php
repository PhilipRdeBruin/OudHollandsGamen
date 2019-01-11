<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuzeController extends Controller
{
    public function spelkeuze(){
        return view('spelkeuze');
        }

    public function keuzevrienduitnodiging(){
        return view('keuzevrienduitnodiging');
        }  

    public function profiel(){
        return view('profiel');
        } 

}
