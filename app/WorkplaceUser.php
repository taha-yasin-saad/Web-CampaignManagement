<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkplaceUser extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function workplace(){
        return $this->belongsTo('App\Workplace');
    }

}
