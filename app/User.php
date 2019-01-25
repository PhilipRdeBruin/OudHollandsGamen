<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gebr_naam', 'email', 'password',
        'voornaam', 'initialen', 'tussenv', 'achternaam',
        'straatnaam', 'huisnummer', 'postcode', 'woonplaats',
        'telefoon', 'mobiel', 'loged_in_at', 'loged_out_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function vrienden() {
        return $this->belongsToMany('App\User', 'users_relations', 'gebruiker', 'vriend');
    }
    
    public function vriendenReverse() {
        return $this->belongsToMany('App\User', 'users_relations', 'vriend', 'gebruiker');
    }

    public function isOnline(){
        return Cache::has('user-online-'.$this->id);
    }

}