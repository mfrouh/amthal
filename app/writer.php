<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
    public function articles()
    {
        return $this->hasMany('App\article');
    }
}
