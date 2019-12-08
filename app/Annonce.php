<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'compte_id'
    ];

    /**
     * Cette fonction permet de recuperer le
     * compte qui a fait l'annonce
     * 
     * @return App\Compte
     */
    public function compte()
    {
        return $this->belongsTo('App\Compte');
    }

    /**
     * Cette fonction permet de recuperer la
     * carosserie
     * 
     * @return App\Carosserie
     */
    public function carosserie()
    {
        return $this->belongsTo('App\Carosserie');
    }
}
