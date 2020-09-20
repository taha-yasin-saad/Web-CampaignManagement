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

    public function source(){
        return $this->belongsTo('\App\Source');
    }

    public function user()
    {
        return $this->belongsTo('\App\User');

    }
}
