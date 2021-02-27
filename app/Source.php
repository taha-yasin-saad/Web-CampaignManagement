<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Source extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'workplace_id', 'user_id', 'name', 'country_id', 'website', 'product_id', 'widget_type', 'alignment', 'primary', 'secondary', 'icon_type', 'bubble', 'bubble_line_1', 'bubble_line_2', 'bubble_bg_color', 'bubble_text_color', 'text_text', 'text_round', 'fields','custom_lable_1', 'custom_lable_2', 'submitt_text', 'head_message'
    ];
    protected $casts = [
        'fields' => 'array',
    ];

    public function workplace()
    {
        return $this->belongsTo('App\Workplace');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function lead(){
        return $this->hasMany('App\Lead');
    }
}
