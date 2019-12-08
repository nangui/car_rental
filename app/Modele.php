<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $fillable = ['libelle', 'marque_id'];

    public function marque()
    {
        return $this->belongsTo('App\Marque');
    }

    public function voiture()
    {
        return $this->hasMany('App\Voiture');
    }
}
