<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'workplace_id', 'user_id', 'name', 'country_id', 'website', 'product_id', 'widget_type', 'alignment', 'primary', 'secondary', 'icon_type', 'bubble', 'bubble_line_1', 'bubble_line_2', 'bubble_bg_color', 'bubble_text_color', 'text_text', 'text_round', 'fields','custom_lable_1', 'custom_lable_2'
    ];
    protected $casts = [
        'fields' => 'array',
    ];

    public function workplace()
    {
        return $this->belongsTo('App\Workplace');
    }
}
