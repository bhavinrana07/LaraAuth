<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function student()
    {
        return $this->belongsTo('App\User');
    }
}
