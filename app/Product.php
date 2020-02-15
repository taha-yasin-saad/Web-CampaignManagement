<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'workplace_id', 'title',
    ];

    public function workplace(){
        return $this->belongsTo('App\Workplace');
    }

    public function invited(){
        return $this->hasMany('App\UserProduct');
    }
    public function users(){
        return $this->belongsToMany('App\User','user_products', 'product_id', 'user_id');
    }

}
