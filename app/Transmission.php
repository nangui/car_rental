<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    protected $fillable = ['libelle'];

    public function voiture()
    {
        return $this->hasMany('App\Voiture');
    }
}
