<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carburant extends Model
{
    protected $fillable = ['libelle'];

    public function voiture()
    {
        return $this->hasMany('App\Voiture');
    }
}
