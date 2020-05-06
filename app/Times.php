<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{    
    protected $table = "times"; 
    protected $fillable = [
        'workplace_id','sun_start', 'sun_end','mon_start','mon_end','tue_start','tue_end','wed_start','wed_end','thu_start','thu_end','fri_start','fri_end','sat_start','sat_end'
    ];
}
