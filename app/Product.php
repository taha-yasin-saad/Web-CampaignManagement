<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'workplace_id', 'title',
    ];

    public function workplace(){
        return $this->belongsTo('App\Workplace');
    }

    public function leads(){
        return $this->hasMany('App\Lead');
    }


    public function invited(){
        return $this->hasMany('App\UserProduct');
    }

    public function users(){
        return $this->belongsToMany('App\User','user_products', 'product_id', 'user_id');
    }

    public function source(){
        return $this->hasMany('App\Source');
    }




}
