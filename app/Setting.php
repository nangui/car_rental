<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_address', 'email', 'site_phone',
        'site_name', 'site_slogan', 'site_copyright',
        'site_facebook', 'site_twitter', 'site_linkedin',
        'site_latitude', 'site_longitude'
    ];
}
