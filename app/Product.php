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
}
