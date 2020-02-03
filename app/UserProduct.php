<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    public function invited_user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function workplaces(){
        return $this->belongsTo('App\Workplace', 'workplace_id', 'id');
    }
    public function products(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

}
