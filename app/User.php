<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','country_code','device_token','os','is_available','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products(){
        return $this->belongsToMany('App\Product','user_products', 'user_id', 'product_id');
    }
    public function products_workplace($work_id){
        return $this->products()->where('workplace_id',$work_id);
    }
    public function workplaces(){
        return $this->belongsToMany('App\Workplace','workplace_users', 'user_id', 'workplace_id');
    }

    public function leads()
    {
        return $this->hasMany('App\Lead');
    }

    public function scopeFilter($query, $request)
    {
        if($request->from_date && $request->to_date){
            $query->whereDate('created_at','>=', date('Y-m-d', strtotime($request->from_date)))->whereDate('created_at','<=', date('Y-m-d', strtotime($request->to_date)));
        }
        if($request->select_leads && $request->count_leads){
            $query->has('leads',$request->select_leads, $request->count_leads);
        }
        if($request->select_workplaces && $request->count_workplaces){
            $query->has('workplaces',$request->select_workplaces, $request->count_workplaces);
        }
        if($request->select_products && $request->count_products){
            $query->has('products',$request->select_products, $request->count_products);
        }
        return $query;
    }

}
