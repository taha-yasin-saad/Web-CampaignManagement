<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    protected $fillable = [
        'product_id', 'name', 'email', 'phone', 'lead'
    ];

    public function product(){
        return $this->belongsTo('\App\Product');
    }
}
