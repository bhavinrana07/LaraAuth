<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function marks()
    {
        return $this->belongsToMany('App\Mark');
    }
}
