<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id', 'name', 'email', 'phone', 'lead'
    ];

    public function getLeadAttribute()
    {
        $arr = [];
        foreach (json_decode($this->attributes['lead']) as $key => $value) {
            if (strpos($key, '_id') !== false)
                continue;
            $m['key'] = $key;
            $m['value'] = $value;
            array_push($arr, (object) $m);
        }
        if ($this->source) {
            $m['key'] = 'source';
            $m['value'] = $this->source->name;
            array_push($arr, (object) $m);
        }
        if ($this->product) {
            $m['key'] = 'product';
            $m['value'] = $this->product->title;
            array_push($arr, (object) $m);
        }
        return $arr;
    }
    public function product()
    {
        return $this->belongsTo('\App\Product');
    }

    public function source()
    {
        return $this->belongsTo('\App\Source');
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
    public function workplaces()
    {
        return $this->hasOneThrough(Workplace::class, Product::class, 'id', 'id', 'product_id', 'workplace_id');
    }

    public function scopeQualified($query)
    {
        return $query->where('status', 0);
    }

    public function scopeLastContact($query)
    {
        return $query->where('last_contact', '!=', null);
    }

    public function scopeFilter($query, $request)
    {
        if ($request->product_id) {
            $query->where('product_id', $request->product_id);
        }
        if ($request->user_id) {
            $query->where('user_id', $request->user_id);
        }
        if ($request->status != null) {
            if ($request->status == 0){
                $query->where('status', 0);
            } elseif ($request->status == 1) {
                $query->whereIn('status', [1, 2]);
            }
        }
        if ($request->min_date && $request->max_date) {
            $query->whereDate('created_at', '>=', date('Y-m-d', strtotime($request->min_date)))->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->max_date)));
        }

        return $query;
    }
}
