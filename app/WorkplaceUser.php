<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkplaceUser extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function workplace()
    {
        return $this->belongsTo('App\Workplace');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
