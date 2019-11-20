<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = [
        'active', 'is_admin', 'user_id'
    ];

    public function user()
    {
        return $this->belonngsTo('App\User');
    }
}
