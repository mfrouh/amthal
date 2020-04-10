<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
    public function articles()
    {
        return $this->hasMany('App\article');
    }
    public function books()
    {
        return $this->hasMany('App\book');
    }
}
