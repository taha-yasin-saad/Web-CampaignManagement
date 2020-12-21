<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'name'
    ];
    public function countries()
    {
        return $this->belongsToMany('App\Country','zone_countries','zone_id','country_id');
    }
}
