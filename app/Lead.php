<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    protected $fillable = [
        'product_id', 'name', 'email', 'phone', 'lead'
    ];

    public function getLeadAttribute()
    {
        $arr = [];
        foreach (json_decode($this->attributes['lead']) as $key=>$value){
            $m['key'] = $key;
            $m['value'] = $value;
            array_push($arr,(object) $m);
        }
        return $arr;
    }
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
