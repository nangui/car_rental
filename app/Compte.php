<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = [
        'active', 'is_admin', 'user_id'
    ];

    /**
     * Cette fonction permet de recuperer l'utilisateur
     * propriaitaire du compte
     * 
     * @return App\User
     */
    public function user()
    {
        return $this->belonngsTo('App\User');
    }

    /**
     * Cette fonction permet de recuperer l'utilisateur
     * les annonces faites par un compte
     * 
     * @return App\Annonce
     */
    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
}
