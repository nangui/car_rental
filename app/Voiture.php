<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = [
        'annonce_id', 'modele_id', 'carburant_id',
        'constructeur_id', 'transmission_id', 'carosserie_id',
        'year', 'mileage', 'state',
        'color', 'cylinder', 'number_of_horses',
        'customs_clearance', 'chassis_number', 'liter',
        'image'
    ];

    public function annonce()
    {
        return $this->belongsTo('App\Annonce');
    }

    public function modele()
    {
        return $this->belongsTo('App\Modele');
    }

    public function carburant()
    {
        return $this->belongsTo('App\Carburant');
    }

    public function transmission()
    {
        return $this->belongsTo('App\Transmission');
    }

    public function constructeur()
    {
        return $this->belongsTo('App\Constructeur');
    }

    public function carosserie()
    {
        return $this->belongsTo('App\Carosserie');
    }
}
