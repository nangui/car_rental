<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $fillable = ['libelle'];

    public function modele()
    {
        return $this->hasMany('App\Modele');
    }
}
