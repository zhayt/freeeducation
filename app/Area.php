<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    public function courses()
    {
        return $this ->hasMany(Course::class);
    }
}
