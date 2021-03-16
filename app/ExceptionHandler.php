<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExceptionHandler extends Model
{
    protected $table = "vendor_tylercd100_lern_exceptions";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
