<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model
{
    protected $fillable = [
        'admin_id', 'title','timezone','website','startday'
    ];
    protected $with = [
        'times'
    ];

    public function admin(){
        return $this->belongsTo('App\User','admin_id','id');
    }
    public function products(){
        return $this->hasMany('App\Product');
    }
    public function times(){
        return $this->hasOne('App\Times');
    }

    public function users(){
        return $this->belongsToMany('App\User','workplace_users', 'workplace_id', 'user_id')->withPivot('role','status');
    }
}
