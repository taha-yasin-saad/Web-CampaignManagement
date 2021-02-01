<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];
    public function countries()
    {
        return $this->belongsToMany('App\Country','zone_countries','zone_id','country_id');
    }
}
