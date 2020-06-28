<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function semesters()
    {
        return $this->belongsToMany('App\Semester');
    }
}
