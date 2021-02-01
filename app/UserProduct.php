<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProduct extends Model
{
    use SoftDeletes;

    public function invited_user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function products(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

}
