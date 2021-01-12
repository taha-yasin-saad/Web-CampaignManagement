<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workplace extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'admin_id', 'title','timezone','website','startday'
    ];
    protected $with = [
        'times','admin'
    ];

    public function admin(){
        return $this->belongsTo('App\User','admin_id','id');
    }
    public function products(){
        return $this->hasMany('App\Product');
    }
    public function leads(){
        return $this->hasManyThrough('App\Lead','App\Product');
    }
    public function times(){
        return $this->hasOne('App\Times');
    }

    public function users(){
        return $this->belongsToMany('App\User','workplace_users', 'workplace_id', 'user_id')->withPivot('role','status');
    }

    public function scopeFilter($query, $request)
    {
        if($request->from_date && $request->to_date){
            $query->whereDate('created_at','>=', date('Y-m-d', strtotime($request->from_date)))->whereDate('created_at','<=', date('Y-m-d', strtotime($request->to_date)));
        }
        if($request->select_leads && $request->count_leads){
            $query->has('leads',$request->select_leads, $request->count_leads);
        }
        if($request->select_users && $request->count_users){
            $query->has('users',$request->select_users, $request->count_users);
        }
        if($request->select_products && $request->count_products){
            $query->has('products',$request->select_products, $request->count_products);
        }
        return $query;
    }
}
